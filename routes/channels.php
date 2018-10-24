<?php
Broadcast::channel('App.User.{id}', function ($sp3353ce, $spfc3b4d) { return (int) $sp3353ce->id === (int) $spfc3b4d; });