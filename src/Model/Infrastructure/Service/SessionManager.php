<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Service;

use Exception;

class SessionManager
{

    public static function sessionStart(): void
    {
        self::initializeSettings();
        ini_set('session.use_strict_mode', 1);
        session_start();

        if (($_SESSION['destroyedTime'] ?? time()) < time()-300) {
            self::deleteOldSession($_SERVER['HTTP_COOKIE'], session_id(), $_SESSION['newSessionId'] ?? ' ');
            throw new Exception('Conexão instável. Por favor tente conectar novamente.');
        }

        if (isset($_SESSION['newSessionId'])) {
            session_commit();
            session_id($_SESSION['newSessionId']);
            ini_set('session.use_strict_mode', 0);
            session_start();
        }
    }

    public static function sessionRegenerate(): void
    {
        $newSessoinId = session_create_id();
        $oldSessionData = $_SESSION;

        $_SESSION['newSessionId'] = $newSessoinId;
        $_SESSION['destroyedTime'] = time();
        session_commit();

        session_id($newSessoinId);
        ini_set('session.use_strict_mode', 0);
        session_start();
        $_SESSION = $oldSessionData;
    }

    private static function initializeSettings(): void
    {
        session_save_path(__DIR__ . '/../../../../session_info/');
        ini_set('session.gc_probability', 1000);
        ini_set('session.gc_maxlifetime', 600);
        session_set_cookie_params([
            'secure' => true,
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
    }

    private static function deleteOldSession(string $cookieID, string $sessionID, string $newSessionID): void
    {
        $cookieIDPath = __DIR__ . '/../../../../session_info/sess_' . substr($cookieID, strpos($cookieID, 'PHPSESSID=')+10, 26);
        $sessionIDPath = __DIR__ . '/../../../../session_info/sess_' . $sessionID;
        $newSessionIDPath = __DIR__ . '/../../../../session_info/sess_' . $newSessionID;

        if (file_exists($cookieIDPath)) {
            unlink($cookieIDPath);
        }

        if (file_exists($sessionIDPath)) {
            unlink($sessionIDPath);
        }

        if (file_exists($newSessionIDPath)) {
            unlink($newSessionIDPath);
        }
    }
}