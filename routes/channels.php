<?php
Broadcast::channel('App.User.{id}', function ($sp47ffde, $spae6a5b) { return (int) $sp47ffde->id === (int) $spae6a5b; });