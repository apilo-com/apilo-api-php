<?php
/**
 * RestOrderDocumentDTO3
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
 * RestOrderDocumentDTO3 Class Doc Comment
 *
 * @category Class
 * @description This object represents a document belongs to an order with the specified ID
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestOrderDocumentDTO3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestOrderDocumentDTO3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'id_external' => 'string',
        'number' => 'string',
        'price_with_tax' => 'string',
        'price_without_tax' => 'string',
        'currency' => 'string',
        'currency_value' => 'string',
        'type' => 'int',
        'created_at' => '\DateTime'
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
        'id_external' => null,
        'number' => null,
        'price_with_tax' => null,
        'price_without_tax' => null,
        'currency' => null,
        'currency_value' => null,
        'type' => null,
        'created_at' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'id_external' => true,
        'number' => true,
        'price_with_tax' => true,
        'price_without_tax' => true,
        'currency' => true,
        'currency_value' => true,
        'type' => true,
        'created_at' => true
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
        'id_external' => 'idExternal',
        'number' => 'number',
        'price_with_tax' => 'priceWithTax',
        'price_without_tax' => 'priceWithoutTax',
        'currency' => 'currency',
        'currency_value' => 'currencyValue',
        'type' => 'type',
        'created_at' => 'createdAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'id_external' => 'setIdExternal',
        'number' => 'setNumber',
        'price_with_tax' => 'setPriceWithTax',
        'price_without_tax' => 'setPriceWithoutTax',
        'currency' => 'setCurrency',
        'currency_value' => 'setCurrencyValue',
        'type' => 'setType',
        'created_at' => 'setCreatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'id_external' => 'getIdExternal',
        'number' => 'getNumber',
        'price_with_tax' => 'getPriceWithTax',
        'price_without_tax' => 'getPriceWithoutTax',
        'currency' => 'getCurrency',
        'currency_value' => 'getCurrencyValue',
        'type' => 'getType',
        'created_at' => 'getCreatedAt'
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
        $this->setIfExists('id_external', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('price_with_tax', $data ?? [], null);
        $this->setIfExists('price_without_tax', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('currency_value', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
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

        if (!is_null($this->container['id']) && ($this->container['id'] < 0)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 0.";
        }

        if ($this->container['id_external'] === null) {
            $invalidProperties[] = "'id_external' can't be null";
        }
        if ((mb_strlen($this->container['id_external']) > 36)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be smaller than or equal to 36.";
        }

        if ((mb_strlen($this->container['id_external']) < 1)) {
            $invalidProperties[] = "invalid value for 'id_external', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) > 64)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['number']) && (mb_strlen($this->container['number']) < 1)) {
            $invalidProperties[] = "invalid value for 'number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * @param int|null $id Internal ID of the shipment
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id) && ($id < 0)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestOrderDocumentDTO3., must be bigger than or equal to 0.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets id_external
     *
     * @return string
     */
    public function getIdExternal()
    {
        return $this->container['id_external'];
    }

    /**
     * Sets id_external
     *
     * @param string $id_external External unique ID of the document - used for the update
     *
     * @return self
     */
    public function setIdExternal($id_external)
    {
        if (is_null($id_external)) {
            array_push($this->openAPINullablesSetToNull, 'id_external');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id_external', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($id_external) && (mb_strlen($id_external) > 36)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderDocumentDTO3., must be smaller than or equal to 36.');
        }
        if (!is_null($id_external) && (mb_strlen($id_external) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id_external when calling RestOrderDocumentDTO3., must be bigger than or equal to 1.');
        }

        $this->container['id_external'] = $id_external;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number External document number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            array_push($this->openAPINullablesSetToNull, 'number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($number) && (mb_strlen($number) > 64)) {
            throw new \InvalidArgumentException('invalid length for $number when calling RestOrderDocumentDTO3., must be smaller than or equal to 64.');
        }
        if (!is_null($number) && (mb_strlen($number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $number when calling RestOrderDocumentDTO3., must be bigger than or equal to 1.');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets price_with_tax
     *
     * @return string|null
     */
    public function getPriceWithTax()
    {
        return $this->container['price_with_tax'];
    }

    /**
     * Sets price_with_tax
     *
     * @param string|null $price_with_tax The gross value
     *
     * @return self
     */
    public function setPriceWithTax($price_with_tax)
    {
        if (is_null($price_with_tax)) {
            array_push($this->openAPINullablesSetToNull, 'price_with_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_with_tax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['price_with_tax'] = $price_with_tax;

        return $this;
    }

    /**
     * Gets price_without_tax
     *
     * @return string|null
     */
    public function getPriceWithoutTax()
    {
        return $this->container['price_without_tax'];
    }

    /**
     * Sets price_without_tax
     *
     * @param string|null $price_without_tax The net value
     *
     * @return self
     */
    public function setPriceWithoutTax($price_without_tax)
    {
        if (is_null($price_without_tax)) {
            array_push($this->openAPINullablesSetToNull, 'price_without_tax');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('price_without_tax', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['price_without_tax'] = $price_without_tax;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency on the document
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            array_push($this->openAPINullablesSetToNull, 'currency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling RestOrderDocumentDTO3., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling RestOrderDocumentDTO3., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets currency_value
     *
     * @return string|null
     */
    public function getCurrencyValue()
    {
        return $this->container['currency_value'];
    }

    /**
     * Sets currency_value
     *
     * @param string|null $currency_value Currency exchange rate
     *
     * @return self
     */
    public function setCurrencyValue($currency_value)
    {
        if (is_null($currency_value)) {
            array_push($this->openAPINullablesSetToNull, 'currency_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currency_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }


        $this->container['currency_value'] = $currency_value;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type Document type - <a href='#tag/Order/operation/get_rest_documents_map'>order document types endpoint</a>
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Date the document was added to Apilo
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

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


