<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Struct;

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlAttribute};

/**
 * TagAction struct class
 *
 * @package    Zimbra
 * @subpackage Mail
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2020-present by Nguyen Van Nguyen.
 */
class TagAction extends FilterAction
{
    /**
     * Tag name
     * 
     * @var string
     */
    #[Accessor(getter: 'getTag', setter: 'setTag')]
    #[SerializedName(name: 'tagName')]
    #[Type(name: 'string')]
    #[XmlAttribute]
    private $tag;

    /**
     * Constructor
     * 
     * @param int $index
     * @param string $tag
     * @return self
     */
    public function __construct(?int $index = NULL, ?string $tag = NULL)
    {
    	parent::__construct($index);
        if (NULL !== $tag) {
            $this->setTag($tag);
        }
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag(): ?string
    {
        return $this->tag;
    }

    /**
     * Set tag
     *
     * @param  string $tag
     * @return self
     */
    public function setTag(string $tag)
    {
        $this->tag = $tag;
        return $this;
    }
}
