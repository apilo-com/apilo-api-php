<?php
/**
 * RestProductAttributeDTO3
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
 * RestProductAttributeDTO3 Class Doc Comment
 *
 * @category Class
 * @package  Apilo
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RestProductAttributeDTO3 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RestProductAttributeDTO3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'product_id' => 'int',
        'type' => 'int',
        'values' => '\Apilo\Model\ProductAttributeValuesInner2[]'
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
        'product_id' => null,
        'type' => null,
        'values' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'product_id' => false,
        'type' => false,
        'values' => false
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
        'product_id' => 'productId',
        'type' => 'type',
        'values' => 'values'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_id' => 'setProductId',
        'type' => 'setType',
        'values' => 'setValues'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_id' => 'getProductId',
        'type' => 'getType',
        'values' => 'getValues'
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

    public const TYPE_NUMBER_1 = 1;
    public const TYPE_NUMBER_2 = 2;
    public const TYPE_NUMBER_9 = 9;
    public const TYPE_NUMBER_16 = 16;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_NUMBER_1,
            self::TYPE_NUMBER_2,
            self::TYPE_NUMBER_9,
            self::TYPE_NUMBER_16,
        ];
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
        $this->setIfExists('product_id', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('values', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (($this->container['id'] < 1)) {
            $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
        }

        if ($this->container['product_id'] === null) {
            $invalidProperties[] = "'product_id' can't be null";
        }
        if (($this->container['product_id'] < 1)) {
            $invalidProperties[] = "invalid value for 'product_id', must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Internal Attribute ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        if (($id < 1)) {
            throw new \InvalidArgumentException('invalid value for $id when calling RestProductAttributeDTO3., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id Internal Product ID
     *
     * @return self
     */
    public function setProductId($product_id)
    {
        if (is_null($product_id)) {
            throw new \InvalidArgumentException('non-nullable product_id cannot be null');
        }

        if (($product_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $product_id when calling RestProductAttributeDTO3., must be bigger than or equal to 1.');
        }

        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type Attribute type ('1-Text', 2-'boolean', '9-textarea', '16-feature')
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets values
     *
     * @return \Apilo\Model\ProductAttributeValuesInner2[]|null
     */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
     * Sets values
     *
     * @param \Apilo\Model\ProductAttributeValuesInner2[]|null $values Product Attribute Values
     *
     * @return self
     */
    public function setValues($values)
    {
        if (is_null($values)) {
            throw new \InvalidArgumentException('non-nullable values cannot be null');
        }
        $this->container['values'] = $values;

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


