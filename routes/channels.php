<?php
Broadcast::channel('App.User.{id}', function ($spe2e14a, $sp7a2170) { return (int) $spe2e14a->id === (int) $sp7a2170; });