<?php
Broadcast::channel('App.User.{id}', function ($spc6e0c5, $spe6149b) { return (int) $spc6e0c5->id === (int) $spe6149b; });