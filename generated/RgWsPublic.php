<?php
/** 
 * GenWsErrorRtUser.php 
 * 
 * Copyright (c) 2015 Christos Koninis <christos.koninis@gmail.com>.
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * 
 * @author     Christos Koninis <christos.koninis@gmail.com>
 * @copyright  2015 Christos Koninis <christos.koninis@gmail.com>
 * @license    http://opensource.org/licenses/MIT  MIT License 
 * @version    0.1.0
 */ 

include_once('wse-php/soap-wsse.php');
include_once('RgWsPublicInputRtUser.php');
include_once('RgWsPublicInputRtBase.php');
include_once('RgWsPublicBasicRtUser.php');
include_once('RgWsPublicBasicRtBase.php');
include_once('RgWsPublicFirmActRtUserArray.php');
include_once('RgWsPublicFirmActRtUser.php');
include_once('RgWsPublicFirmActRtBase.php');
include_once('GenWsErrorRtUser.php');
include_once('GenWsErrorRtBase.php');

class mySoap extends SoapClient {

    private $password;
    private $username;

    public function __construct($username = '', $password = '', $wsdl = 'RgWsPublicPort.wsdl', array $options = array())
  {
    parent::__construct($wsdl, $options);
    $this->username = $username;
    $this->password = $password;
    }
  
   function __doRequest($request, $location, $saction, $version) {
        $dom = new DOMDocument();
        $dom->loadXML($request);
        $objWSA = new WSSESoap($dom);
        $objWSA->addUserToken($this->username, $this->password, false);
        $request = $objWSA->saveXML();
        print_r($request);
        return parent::__doRequest($request, $location, $saction, $version);
   }
}
/**
 * 
 */
class RgWsPublic extends mySoap
{

  /**
   * 
   * @var array $classmap The defined classes
   * @access private
   */
  private static $classmap = array(
    'RgWsPublicInputRtUser' => '\RgWsPublicInputRtUser',
    'RgWsPublicInputRtBase' => '\RgWsPublicInputRtBase',
    'RgWsPublicBasicRtUser' => '\RgWsPublicBasicRtUser',
    'RgWsPublicBasicRtBase' => '\RgWsPublicBasicRtBase',
    'RgWsPublicFirmActRtUserArray' => '\RgWsPublicFirmActRtUserArray',
    'RgWsPublicFirmActRtUser' => '\RgWsPublicFirmActRtUser',
    'RgWsPublicFirmActRtBase' => '\RgWsPublicFirmActRtBase',
    'GenWsErrorRtUser' => '\GenWsErrorRtUser',
    'GenWsErrorRtBase' => '\GenWsErrorRtBase');

  /**
   * 
   * @param array $options A array of config values
   * @param string $wsdl The wsdl file to use
   * @access public
   */
  public function __construct($username = '', $password = '', array $options = array(), $wsdl = 'generated/RgWsPublicPort.wsdl')
  {
    foreach (self::$classmap as $key => $value) {
      if (!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    
    parent::__construct($username, $password, $wsdl, $options);
  }

  /**
   * 
   * @param RgWsPublicInputRtUser $RgWsPublicInputRt_in
   * @param RgWsPublicBasicRtUser $RgWsPublicBasicRt_out
   * @param RgWsPublicFirmActRtUserArray $arrayOfRgWsPublicFirmActRt_out
   * @param decimal $pCallSeqId_out
   * @param GenWsErrorRtUser $pErrorRec_out
   * @access public
   * @return list(RgWsPublicBasicRtUser $RgWsPublicBasicRt_out, RgWsPublicFirmActRtUserArray $arrayOfRgWsPublicFirmActRt_out, decimal $pCallSeqId_out, GenWsErrorRtUser $pErrorRec_out)
   */
  public function rgWsPublicAfmMethod(RgWsPublicInputRtUser $RgWsPublicInputRt_in, RgWsPublicBasicRtUser $RgWsPublicBasicRt_out, RgWsPublicFirmActRtUserArray $arrayOfRgWsPublicFirmActRt_out,$pCallSeqId_out, GenWsErrorRtUser $pErrorRec_out)
  {
    return $this->__soapCall('rgWsPublicAfmMethod', array($RgWsPublicInputRt_in, $RgWsPublicBasicRt_out, $arrayOfRgWsPublicFirmActRt_out, $pCallSeqId_out, $pErrorRec_out));
  }

  /**
   * 
   * @access public
   * @return string
   */
  public function rgWsPublicVersionInfo()
  {
    return $this->__soapCall('rgWsPublicVersionInfo', array());
  }

}

