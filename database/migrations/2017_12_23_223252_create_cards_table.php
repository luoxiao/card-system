<?php
use Illuminate\Support\Facades\Schema; use Illuminate\Database\Schema\Blueprint; use Illuminate\Database\Migrations\Migration; class CreateCardsTable extends Migration { public function up() { Schema::create('cards', function (Blueprint $spaf336a) { $spaf336a->increments('id'); $spaf336a->integer('user_id'); $spaf336a->integer('product_id'); $spaf336a->string('card', 100); $spaf336a->integer('type'); $spaf336a->integer('status')->default(\App\Card::STATUS_NORMAL); $spaf336a->integer('count_sold')->default(0); $spaf336a->integer('count_all')->default(1); $spaf336a->timestamps(); $spaf336a->softDeletes(); $spaf336a->index(array('user_id', 'product_id')); }); DB::unprepared('ALTER TABLE `cards` CHANGE COLUMN `created_at` `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP;'); try { DB::unprepared('DROP PROCEDURE `add_cards`;'); } catch (\Exception $spfda1c7) { } DB::unprepared('
CREATE PROCEDURE `add_cards`(IN `in_user_id` int, IN `in_product_id` int, IN `in_type` int, IN `in_status` int, IN `in_card_arr` longtext, IN `in_is_check` tinyint)
LANGUAGE SQL
NOT DETERMINISTIC
CONTAINS SQL
SQL SECURITY DEFINER
COMMENT \'\'
BEGIN
SET @i=1; 
SET @count=CHAR_LENGTH(in_card_arr)-CHAR_LENGTH(REPLACE(in_card_arr,\'<\',\'\')) + 1;
WHILE @i <= @count 
DO 
	SET @card = SUBSTRING_INDEX(SUBSTRING_INDEX(in_card_arr,\'<\',@i),\'<\',-1);
	IF in_is_check = 1 THEN
		INSERT INTO `cards` (`user_id`,`product_id`,`card`,`type`,`status`)
			SELECT * FROM (SELECT in_user_id as `user_id`, in_product_id as `product_id`,
			    @card as `card`, in_type as `type`, in_status as `status`) AS tmp
			WHERE NOT EXISTS (SELECT `card` FROM `cards` WHERE `product_id`=in_product_id AND `card`=@card) LIMIT 1;
	ELSE
		INSERT INTO `cards` (`user_id`,`product_id`,`card`,`type`,`status`) VALUES (in_user_id,in_product_id,@card,in_type,in_status);
	END IF; 
	SET @i=@i+1; 
END WHILE;
END;'); } public function down() { Schema::dropIfExists('cards'); try { DB::unprepared('DROP PROCEDURE `add_cards`;'); } catch (\Exception $spfda1c7) { } } }