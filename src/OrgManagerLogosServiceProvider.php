<?php

namespace OrgManager\Logos;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class OrgManagerLogosServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
      Blade::directive('orgmanager-logo', function ($expression) {
        return $this->orgmanagerLogo();
      });
      Blade::directive('orgmanager-logo-white', function ($expression) {
        return $this->orgmanagerLogoWhite();
      });
    }

    protected function orgmanagerLogo()
    {
        return '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 83.2 83.2" enable-background="new 0 0 83.2 83.2" xml:space="preserve">
<g>
	<path fill="#0FAEC9" d="M45.3,1.6c-2.1-2.1-5.5-2.1-7.6,0L1.6,37.7c-2.1,2.1-2.1,5.5,0,7.6l36.3,36.3c2.1,2.1,5.5,2.1,7.6,0
		l36.1-36.1c2.1-2.1,2.1-5.5,0-7.6L45.3,1.6z M67.6,50.3l-8.7-8.7l2.2-2.2l-6.5-6.5l-8.7,8.7l6.5,6.5l2.2-2.2l8.7,8.7l-8.7,8.7
		l-8.7-8.7l2.2-2.2l-6.5-6.5l-8.7,8.7l6.5,6.5l2.2-2.2l8.7,8.7l-8.7,8.7l-8.7-8.7l2.2-2.2L24.2,54.6l13-13l-6.5-6.5l-2.2,2.2
		l-8.7-8.7l8.7-8.7l8.7,8.7l-2.2,2.2l6.5,6.5l13-13l10.8,10.8l2.2-2.2l8.7,8.7L67.6,50.3z"/>
</g>
</svg>';
  }

  protected function orgmanagerLogoWhite()
  {
    return '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 83.2 83.2" enable-background="new 0 0 83.2 83.2" xml:space="preserve">
<g>
	<path fill="#FFFFFF" d="M45.3,1.6c-2.1-2.1-5.5-2.1-7.6,0L1.6,37.7c-2.1,2.1-2.1,5.5,0,7.6l36.3,36.3c2.1,2.1,5.5,2.1,7.6,0
		l36.1-36.1c2.1-2.1,2.1-5.5,0-7.6L45.3,1.6z M67.6,50.3l-8.7-8.7l2.2-2.2l-6.5-6.5l-8.7,8.7l6.5,6.5l2.2-2.2l8.7,8.7l-8.7,8.7
		l-8.7-8.7l2.2-2.2l-6.5-6.5l-8.7,8.7l6.5,6.5l2.2-2.2l8.7,8.7l-8.7,8.7l-8.7-8.7l2.2-2.2L24.2,54.6l13-13l-6.5-6.5l-2.2,2.2
		l-8.7-8.7l8.7-8.7l8.7,8.7l-2.2,2.2l6.5,6.5l13-13l10.8,10.8l2.2-2.2l8.7,8.7L67.6,50.3z"/>
</g>
</svg>';
  }
}
