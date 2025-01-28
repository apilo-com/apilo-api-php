<?php
/**
 * RestShipmentCarrierDocumentsListingResponse
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Apilo REST API
 *
 * # Dokumentacja REST API dla Apilo     Limit zapytań to 150req/min. ## Obsługa zasobów API    Dla wszystkich zasobów niezwiązanych z procesem autoryzacji należy dołączyć następujące nagłówki:  ``` Accept: application/json Content-Type: application/json Authorization: Bearer access_token ```     Dla każdego zapytania (również autoryzacyjnych) należy określić typ mediów (nagłówek    Accept oraz Content-Type), będzie to zawsze application/json.    Zarówno dla zapytań wysyłanych na serwer jak i danych zwracanych przez serwer    stosowany jest format danych (payload) JSON. Należy odpowiednio dla zapytań enkodować    dane do tego formatu oraz dla odpowiedzi dekodować dane tego formatu.     Przesyłając dane do API:    Pola opcjonalne można wypełnić lub przypisać im wartość null w przypadku zapytań    POST/PUT lub nie przesyłać ich w przypadku filtrów GET.    Pola obowiązkowe należy zawsze wypełnić właściwą wartością. ## Filtry dla list Dla zasobów typu GET z listą wyników można stosować dodatkowe filtry manipulujące wynikami. Parametry należy przekazać w URL zaraz za znakiem kończącym adres zasobu, np. `.../api/orders/?limit=200` Dla list dostępne są dwa ogólne filtry:  `int` `limit` - Limit zwracanych wyników (maksymalnie 2000) `int` `offset` - Wskaźnik pozycji (0 - sam początek, 1 - pomija jeden rekord, 256 - pomija 256     rekordów) ## Format daty Daty dla przesyłanych wartości (filtry oraz przesyłane obiekty metodą POST/PUT) stosowany jest format daty ISO 8601 w następującym formacie: `DateTimeIso` `YYYY-MM-DDTHH-MM-SSZ`. W PHP jest to `DateTimeInterface::ATOM`. Domyślnie w takim formacie stosowany jest czas zulu (trzeba uwzględnić przesunięcie względem strefy czasowej). Czas Zulu można zastąpić lokalizacją strefy czasowej, np. w przypadku Polski jest to +0200 w przypadku czasu letniego lub +0100 w przypadku czasu podstawowego (przekazując strefę czasową w filtrze - parametr GET - należy pamiętać o zakodowaniu znaku plusa, w przeciwnym wypadku zostanie zinterpretowany jako spacja).  `2024-09-12T08:16:32+02:00`
 *
 * The version of the OpenAPI document: 2.0.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Apilo\Model;

use \ArrayAccess;
use \Apilo\ObjectSerializer;

/**
 * RestShipmentCarrierDocumentsListingResponse Class Doc Comment
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestShipmentCarrierDocumentsListingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestShipmentCarrierDocumentsListingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'documents' => '\Apilo\Model\RestShipmentCarrierDocumentDTO[]',
        'total_count' => 'int',
        'current_offset' => 'int',
        'page_result_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'documents' => null,
        'total_count' => null,
        'current_offset' => null,
        'page_result_count' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'documents' => false,
        'total_count' => false,
        'current_offset' => false,
        'page_result_count' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'documents' => 'documents',
        'total_count' => 'totalCount',
        'current_offset' => 'currentOffset',
        'page_result_count' => 'pageResultCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documents' => 'setDocuments',
        'total_count' => 'setTotalCount',
        'current_offset' => 'setCurrentOffset',
        'page_result_count' => 'setPageResultCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documents' => 'getDocuments',
        'total_count' => 'getTotalCount',
        'current_offset' => 'getCurrentOffset',
        'page_result_count' => 'getPageResultCount'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('documents', $data ?? [], null);
        $this->setIfExists('total_count', $data ?? [], null);
        $this->setIfExists('current_offset', $data ?? [], null);
        $this->setIfExists('page_result_count', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['total_count']) && ($this->container['total_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_count', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['current_offset']) && ($this->container['current_offset'] < 0)) {
            $invalidProperties[] = "invalid value for 'current_offset', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['page_result_count']) && ($this->container['page_result_count'] > 512)) {
            $invalidProperties[] = "invalid value for 'page_result_count', must be smaller than or equal to 512.";
        }

        if (!is_null($this->container['page_result_count']) && ($this->container['page_result_count'] < 0)) {
            $invalidProperties[] = "invalid value for 'page_result_count', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets documents
     *
     * @return \Apilo\Model\RestShipmentCarrierDocumentDTO[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Apilo\Model\RestShipmentCarrierDocumentDTO[]|null $documents List of shipment carrier documents
     *
     * @return self
     */
    public function setDocuments($documents)
    {
        if (is_null($documents)) {
            throw new \InvalidArgumentException('non-nullable documents cannot be null');
        }
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int|null
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int|null $total_count Number of matching results
     *
     * @return self
     */
    public function setTotalCount($total_count)
    {
        if (is_null($total_count)) {
            throw new \InvalidArgumentException('non-nullable total_count cannot be null');
        }

        if (($total_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_count when calling RestShipmentCarrierDocumentsListingResponse., must be bigger than or equal to 0.');
        }

        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets current_offset
     *
     * @return int|null
     */
    public function getCurrentOffset()
    {
        return $this->container['current_offset'];
    }

    /**
     * Sets current_offset
     *
     * @param int|null $current_offset Current list offset
     *
     * @return self
     */
    public function setCurrentOffset($current_offset)
    {
        if (is_null($current_offset)) {
            throw new \InvalidArgumentException('non-nullable current_offset cannot be null');
        }

        if (($current_offset < 0)) {
            throw new \InvalidArgumentException('invalid value for $current_offset when calling RestShipmentCarrierDocumentsListingResponse., must be bigger than or equal to 0.');
        }

        $this->container['current_offset'] = $current_offset;

        return $this;
    }

    /**
     * Gets page_result_count
     *
     * @return int|null
     */
    public function getPageResultCount()
    {
        return $this->container['page_result_count'];
    }

    /**
     * Sets page_result_count
     *
     * @param int|null $page_result_count Number of results per page
     *
     * @return self
     */
    public function setPageResultCount($page_result_count)
    {
        if (is_null($page_result_count)) {
            throw new \InvalidArgumentException('non-nullable page_result_count cannot be null');
        }

        if (($page_result_count > 512)) {
            throw new \InvalidArgumentException('invalid value for $page_result_count when calling RestShipmentCarrierDocumentsListingResponse., must be smaller than or equal to 512.');
        }
        if (($page_result_count < 0)) {
            throw new \InvalidArgumentException('invalid value for $page_result_count when calling RestShipmentCarrierDocumentsListingResponse., must be bigger than or equal to 0.');
        }

        $this->container['page_result_count'] = $page_result_count;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


