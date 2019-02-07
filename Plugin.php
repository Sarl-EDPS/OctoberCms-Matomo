<?php namespace Edps\Matomo;

  use System\Classes\PluginBase;

  class Plugin extends PluginBase
  {
    public function pluginDetails()
    {
      return [
        'name'        => 'edps.matomo::lang.plugin.name',
        'description' => 'edps.matomo::lang.plugin.description',
        'author'      => 'EDPS - JM BRUNO',
        'icon'        => 'icon-certificate',
        'homepage'    => "https://edps.fr"
      ];
    }

    public function registerComponents(){
      return [
        'Edps\Matomo\Components\Matomo' => 'Matomo',
      ];
    }

    public function registerSettings()
    {
    }
  }
?>
