<?php

namespace Model;

interface Authenticable{
    public function canAuth($password);

}