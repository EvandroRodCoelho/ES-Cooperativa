<?php

namespace grupofatec\escooperativa\Model\Infrastructure\Service;

use JetBrains\PhpStorm\NoReturn;

class RedirectionManager
{
    private static string $host;
    private static string $uri;
    private static string $destination;
    /**
     * @var null|string[] $queryParams
     */
    private static ?array $queryParams = null;
    private static string $formattedQueryParams = '';

    /*
     * Default Values
     */
    const DEFAULT_DESTINATION = '';

    private static function initRedirectionManager(): void
    {
        self::$host = $_SERVER['HTTP_HOST'];
        self::$uri = rtrim(dirname($_SERVER['REQUEST_URI']), DIRECTORY_SEPARATOR);
    }

    /**
     * @param string $destination
     * @return void
     */
    private static function setDestination(string $destination): void
    {
        self::$destination = $destination;
    }

    /**
     * @param string[] $params
     * @return void
     */
    private static function setQueryParams(array $params): void
    {
        self::$queryParams = $params;
    }

    private static function formatQueryParams(): void
    {
        self::$formattedQueryParams = '?';
        foreach (self::$queryParams as $paramId => $paramValue) {
            self::$formattedQueryParams .= $paramId . '=' . $paramValue . '&';
        }
        self::$formattedQueryParams = rtrim(self::$formattedQueryParams, '&');
    }

    /**
     * @param string $destination [optional] <p>
     * Name of the resource that's going to be requested in the "Location" http header field.
     * DEFAULT_DESTINATION redirects to main page "lista-videos.php".
     * </p>
     * @param null|string[] $params [optional] <p>
     * Array of values that are going to be set as Query Params for the http request.
     * Array key will be formatted as Query Id and key value will be formatted as Query Value, respectively.
     * </p>
     * @return void
     */
    #[NoReturn] public static function redirect(string $destination = self::DEFAULT_DESTINATION, int $responseCode = 200, array $params = null): void
    {
        self::initRedirectionManager();
        self::setDestination($destination);

        if (!is_null($params)) {
            self::setQueryParams($params);
            self::formatQueryParams();
        }

        header('Location: http://' . self::$host . self::$uri . '/' . self::$destination . self::$formattedQueryParams, true, $responseCode);
        exit();
    }
}