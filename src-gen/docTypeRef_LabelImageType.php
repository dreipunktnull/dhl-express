<?php

namespace DHL\Express\Webservice;

class docTypeRef_LabelImageType
{
    /**
     * @var string $LabelImageFormat
     */
    protected $LabelImageFormat = null;

    /**
     * @var string $GraphicImage
     */
    protected $GraphicImage = null;

    /**
     * @var string $HTMLImage
     */
    protected $HTMLImage = null;

    /**
     * @param string $LabelImageFormat
     * @param string $GraphicImage
     */
    public function __construct($LabelImageFormat, $GraphicImage)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      $this->GraphicImage = $GraphicImage;
    }

    /**
     * @return string
     */
    public function getLabelImageFormat()
    {
      return $this->LabelImageFormat;
    }

    /**
     * @param string $LabelImageFormat
     * @return \DHL\Express\Webservice\docTypeRef_LabelImageType
     */
    public function setLabelImageFormat($LabelImageFormat)
    {
      $this->LabelImageFormat = $LabelImageFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getGraphicImage()
    {
      return $this->GraphicImage;
    }

    /**
     * @param string $GraphicImage
     * @return \DHL\Express\Webservice\docTypeRef_LabelImageType
     */
    public function setGraphicImage($GraphicImage)
    {
      $this->GraphicImage = $GraphicImage;
      return $this;
    }

    /**
     * @return string
     */
    public function getHTMLImage()
    {
      return $this->HTMLImage;
    }

    /**
     * @param string $HTMLImage
     * @return \DHL\Express\Webservice\docTypeRef_LabelImageType
     */
    public function setHTMLImage($HTMLImage)
    {
      $this->HTMLImage = $HTMLImage;
      return $this;
    }

}
