<?php

declare(strict_types=1);

/**
 * HeaderSelector
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Smobilpay S3P API
 *
 * Smobilpay Third Party API FOR PAYMENT COLLECTIONS
 *
 * OpenAPI spec version: 3.0.4
 *
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.24
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Maviance\S3PApiClient;

/**
 * ApiException Class Doc Comment
 *
 * @category Class
 *
 * @author   Swagger Codegen team
 *
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class HeaderSelector
{
    /**
     * @param string[] $accept
     * @param string[] $contentTypes
     *
     * @return array
     */
    public function selectHeaders(array $accept, array $contentTypes)
    {
        $headers = [];

        $accept = $this->selectAcceptHeader($accept);
        if ($accept !== null) {
            $headers['Accept'] = $accept;
        }

        $headers['Content-Type'] = $this->selectContentTypeHeader($contentTypes);

        return $headers;
    }

    /** @param string[] $accept */
    public function selectHeadersForMultipart(array $accept): array
    {
        $headers = $this->selectHeaders($accept, []);

        unset($headers['Content-Type']);

        return $headers;
    }

    /**
     * Return the header 'Accept' based on an array of Accept provided
     *
     * @param string[] $accept Array of header
     *
     * @return string|null Accept (e.g. application/json)
     */
    private function selectAcceptHeader(array $accept): ?string
    {
        if (empty($accept) || (count($accept) === 1 && $accept[0] === '')) {
            return null;
        } elseif (preg_grep("/application\/json/i", $accept)) {
            return 'application/json';
        }

        return implode(',', $accept);
    }

    /**
     * Return the content type based on an array of content-type provided
     *
     * @param string[] $contentType Array fo content-type
     *
     * @return string Content-Type (e.g. application/json)
     */
    private function selectContentTypeHeader(array $contentType): string
    {
        if (empty($contentType) || (count($contentType) === 1 && $contentType[0] === '') ||
            preg_grep("/application\/json/i", $contentType)) {
            return 'application/json';
        }

        return implode(',', $contentType);
    }
}
