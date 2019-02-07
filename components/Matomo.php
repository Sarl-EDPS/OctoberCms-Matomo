<?php namespace Edps\Matomo\Components;

use Cms\Classes\ComponentBase;
use \stdClass;

class Matomo extends ComponentBase
{
  public function componentDetails()
  {
    return [
      'name'          => 'edps.matomo::lang.components.matomo.name',
      'description'   => 'edps.matomo::lang.components.matomo.description'
    ];
  }

 	public function defineProperties()
  {
    return [
      'keyId'       => [
        'title'         => 'edps.matomo::lang.components.matomo.keyId.value.title',
        'description'   => 'edps.matomo::lang.components.matomo.keyId.value.description',
        'default'       => '1',
        'type'          => 'string',
        'validationPattern' => '^[0-9]+$',
        'validationMessage' => 'edps.matomo::lang.components.matomo.keyId.value.validation',
      ],
      'matomoUrl'   => [
        'title'         => 'edps.matomo::lang.components.matomo.matomoUrl.value.title',
        'description'   => 'edps.matomo::lang.components.matomo.matomoUrl.value.description',
        'default'       => 'default',
        'type'          => 'string',
      ],
      'trackingImg' => [
        'title'         => 'edps.matomo::lang.components.matomo.trackingImg.value.title',
        'description'   => 'edps.matomo::lang.components.matomo.trackingImg.value.description',
        'default'       => false,
        'type'          => 'checkbox',
      ],
    ];
  }

  public function getProperty($propertyName)
  {
    return $this->property($propertyName);
  }

	public function onRender()
  { 
    $matomo = array();
    $matomo['keyId'] = $this->property('keyId');
    $matomo['matomoUrl'] = $this->property('matomoUrl');
    $matomo['trackingImg'] = $this->property('trackingImg');
    $matomo['trackingImgUrl'] = $this->property('matomoUrl').'matomo.php?idsite=1&amp;rec='.$matomo['keyId'];
    $this->page['dataToMatomo'] = $matomo;
  }
}
