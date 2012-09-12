<?php
use Bootstrapper\Images;

class ImagesTest extends BootstrapperWrapper
{
  /**
   * URL example
   * @var string
   */
  private $url = 'http://www.foo.fr/bar.jpg';

  // Matchers ------------------------------------------------------ /

  private function createMatcher($class)
  {
    return array(
      'tag' => 'img',
      'attributes' => array(
        'alt'      => 'foo',
        'class'    => 'foo img-'.$class,
        'data-foo' => 'bar',
        'src'      => $this->url,
      ),
    );
  }

  // Data providers ------------------------------------------------ /

  public function classes()
  {
    return array(
      array('circle'),
      array('polaroid'),
      array('rounded'),
    );
  }

  // Tests --------------------------------------------------------- /

  /**
   * @dataProvider classes
   */
  public function testImages($class)
  {
    $image = call_user_func('Images::'.$class, $this->url, 'foo', $this->testAttributes);

    $this->assertTag($this->createMatcher($class), $image);
  }
}