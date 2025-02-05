<?php
/**
 * RestShipmentTrackingDTO
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
 * RestShipmentTrackingDTO Class Doc Comment
 *
 * @category Class
 * @description This object represents a single shipment tracking.
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestShipmentTrackingDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestShipmentTrackingDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'external_id' => 'string',
        'status' => 'string',
        'status_date' => '\DateTime',
        'status_description' => 'string',
        'status_check_timestamp' => '\DateTime',
        'received_date' => '\DateTime',
        'received_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'external_id' => null,
        'status' => null,
        'status_date' => 'date-time',
        'status_description' => null,
        'status_check_timestamp' => 'date-time',
        'received_date' => 'date-time',
        'received_days' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'external_id' => true,
        'status' => false,
        'status_date' => true,
        'status_description' => true,
        'status_check_timestamp' => true,
        'received_date' => true,
        'received_days' => false
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
        'id' => 'id',
        'external_id' => 'externalId',
        'status' => 'status',
        'status_date' => 'statusDate',
        'status_description' => 'statusDescription',
        'status_check_timestamp' => 'statusCheckTimestamp',
        'received_date' => 'receivedDate',
        'received_days' => 'receivedDays'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'external_id' => 'setExternalId',
        'status' => 'setStatus',
        'status_date' => 'setStatusDate',
        'status_description' => 'setStatusDescription',
        'status_check_timestamp' => 'setStatusCheckTimestamp',
        'received_date' => 'setReceivedDate',
        'received_days' => 'setReceivedDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'external_id' => 'getExternalId',
        'status' => 'getStatus',
        'status_date' => 'getStatusDate',
        'status_description' => 'getStatusDescription',
        'status_check_timestamp' => 'getStatusCheckTimestamp',
        'received_date' => 'getReceivedDate',
        'received_days' => 'getReceivedDays'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('external_id', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('status_date', $data ?? [], null);
        $this->setIfExists('status_description', $data ?? [], null);
        $this->setIfExists('status_check_timestamp', $data ?? [], null);
        $this->setIfExists('received_date', $data ?? [], null);
        $this->setIfExists('received_days', $data ?? [], null);
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

        if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) > 36)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be smaller than or equal to 36.";
        }

        if (!is_null($this->container['external_id']) && (mb_strlen($this->container['external_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'external_id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['status_description']) && (mb_strlen($this->container['status_description']) > 255)) {
            $invalidProperties[] = "invalid value for 'status_description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['status_description']) && (mb_strlen($this->container['status_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'status_description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['received_days']) && ($this->container['received_days'] < 1)) {
            $invalidProperties[] = "invalid value for 'received_days', must be bigger than or equal to 1.";
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Internal shipment ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestShipmentTrackingDTO., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id External unique ID of the shipment
     *
     * @return self
     */
    public function setExternalId($external_id)
    {
        if (is_null($external_id)) {
            array_push($this->openAPINullablesSetToNull, 'external_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('external_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($external_id) && (mb_strlen($external_id) > 36)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling RestShipmentTrackingDTO., must be smaller than or equal to 36.');
        }
        if (!is_null($external_id) && (mb_strlen($external_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $external_id when calling RestShipmentTrackingDTO., must be bigger than or equal to 0.');
        }

        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Shipment tracking status if is present or NULL
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_date
     *
     * @return \DateTime|null
     */
    public function getStatusDate()
    {
        return $this->container['status_date'];
    }

    /**
     * Sets status_date
     *
     * @param \DateTime|null $status_date Date of handing over the shipment to the courier
     *
     * @return self
     */
    public function setStatusDate($status_date)
    {
        if (is_null($status_date)) {
            array_push($this->openAPINullablesSetToNull, 'status_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status_date'] = $status_date;

        return $this;
    }

    /**
     * Gets status_description
     *
     * @return string|null
     */
    public function getStatusDescription()
    {
        return $this->container['status_description'];
    }

    /**
     * Sets status_description
     *
     * @param string|null $status_description Descriptive meaning of status
     *
     * @return self
     */
    public function setStatusDescription($status_description)
    {
        if (is_null($status_description)) {
            array_push($this->openAPINullablesSetToNull, 'status_description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status_description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($status_description) && (mb_strlen($status_description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $status_description when calling RestShipmentTrackingDTO., must be smaller than or equal to 255.');
        }
        if (!is_null($status_description) && (mb_strlen($status_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $status_description when calling RestShipmentTrackingDTO., must be bigger than or equal to 0.');
        }

        $this->container['status_description'] = $status_description;

        return $this;
    }

    /**
     * Gets status_check_timestamp
     *
     * @return \DateTime|null
     */
    public function getStatusCheckTimestamp()
    {
        return $this->container['status_check_timestamp'];
    }

    /**
     * Sets status_check_timestamp
     *
     * @param \DateTime|null $status_check_timestamp Date when the shipment status was last checked
     *
     * @return self
     */
    public function setStatusCheckTimestamp($status_check_timestamp)
    {
        if (is_null($status_check_timestamp)) {
            array_push($this->openAPINullablesSetToNull, 'status_check_timestamp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status_check_timestamp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status_check_timestamp'] = $status_check_timestamp;

        return $this;
    }

    /**
     * Gets received_date
     *
     * @return \DateTime|null
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date
     *
     * @param \DateTime|null $received_date The date the parcel was received
     *
     * @return self
     */
    public function setReceivedDate($received_date)
    {
        if (is_null($received_date)) {
            array_push($this->openAPINullablesSetToNull, 'received_date');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('received_date', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets received_days
     *
     * @return int|null
     */
    public function getReceivedDays()
    {
        return $this->container['received_days'];
    }

    /**
     * Sets received_days
     *
     * @param int|null $received_days Number of business days in which the parcel was received
     *
     * @return self
     */
    public function setReceivedDays($received_days)
    {
        if (is_null($received_days)) {
            throw new \InvalidArgumentException('non-nullable received_days cannot be null');
        }

        if (($received_days < 1)) {
            throw new \InvalidArgumentException('invalid value for $received_days when calling RestShipmentTrackingDTO., must be bigger than or equal to 1.');
        }

        $this->container['received_days'] = $received_days;

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


