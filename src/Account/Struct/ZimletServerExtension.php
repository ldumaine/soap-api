<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Account\Struct;

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlAttribute};
use Zimbra\Struct\ZimletServerExtensionInterface;

/**
 * ZimletServerExtension class
 * 
 * @package    Zimbra
 * @subpackage Account
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class ZimletServerExtension implements ZimletServerExtensionInterface
{
    /**
     * Keyword
     * @Accessor(getter="getHasKeyword", setter="setHasKeyword")
     * @SerializedName("hasKeyword")
     * @Type("string")
     * @XmlAttribute
     */
    private $hasKeyword;

    /**
     * Extension class
     * @Accessor(getter="getExtensionClass", setter="setExtensionClass")
     * @SerializedName("extensionClass")
     * @Type("string")
     * @XmlAttribute
     */
    private $extensionClass;

    /**
     * Regex
     * @Accessor(getter="getRegex", setter="setRegex")
     * @SerializedName("regex")
     * @Type("string")
     * @XmlAttribute
     */
    private $regex;

    /**
     * Constructor method for ZimletServerExtension
     * @param string $hasKeyword
     * @param string $extensionClass
     * @param string $regex
     * @return self
     */
    public function __construct(
        ?string $hasKeyword = NULL,
        ?string $extensionClass = NULL,
        ?string $regex = NULL
    )
    {
        if (NULL !== $hasKeyword) {
            $this->setHasKeyword($hasKeyword);
        }
        if (NULL !== $extensionClass) {
            $this->setExtensionClass($extensionClass);
        }
        if (NULL !== $regex) {
            $this->setRegex($regex);
        }
    }

    /**
     * Gets hasKeyword
     *
     * @return string
     */
    public function getHasKeyword(): ?string
    {
        return $this->hasKeyword;
    }

    /**
     * Sets hasKeyword
     *
     * @param  string $hasKeyword
     * @return self
     */
    public function setHasKeyword(string $hasKeyword): self
    {
        $this->hasKeyword = $hasKeyword;
        return $this;
    }

    /**
     * Gets extensionClass
     *
     * @return string
     */
    public function getExtensionClass(): ?string
    {
        return $this->extensionClass;
    }

    /**
     * Sets extensionClass
     *
     * @param  string $extensionClass
     * @return self
     */
    public function setExtensionClass(string $extensionClass): self
    {
        $this->extensionClass = $extensionClass;
        return $this;
    }

    /**
     * Gets regex
     *
     * @return string
     */
    public function getRegex(): ?string
    {
        return $this->regex;
    }

    /**
     * Sets regex
     *
     * @param  string $regex
     * @return self
     */
    public function setRegex(string $regex): self
    {
        $this->regex = $regex;
        return $this;
    }
}
