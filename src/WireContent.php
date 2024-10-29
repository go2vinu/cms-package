<?php

namespace WireContent;

class WireContent {
    protected static function getFacadeAccesor(): string {
        return WireContentServiceProvider::class;
    }
}
