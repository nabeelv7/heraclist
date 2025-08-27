<?php

function connectDB()
{
    static $db = null;

    if (!$db) {
        try {
            $db = new PDO("sqlite:" . __DIR__ . "/local.db");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            echo "❌ Error: " . $e->getMessage();
            exit;
        }
    }

    return $db;
}
