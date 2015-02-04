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

include_once('RgWsPublicBasicRtBase.php');

class RgWsPublicBasicRtUser extends RgWsPublicBasicRtBase
{

  /**
   * 
   * @var string $afm
   * @access public
   */
  public $afm = null;

  /**
   * 
   * @var dateTime $stopDate
   * @access public
   */
  public $stopDate = null;

  /**
   * 
   * @var string $postalAddressNo
   * @access public
   */
  public $postalAddressNo = null;

  /**
   * 
   * @var string $doyDescr
   * @access public
   */
  public $doyDescr = null;

  /**
   * 
   * @var string $doy
   * @access public
   */
  public $doy = null;

  /**
   * 
   * @var string $onomasia
   * @access public
   */
  public $onomasia = null;

  /**
   * 
   * @var string $legalStatusDescr
   * @access public
   */
  public $legalStatusDescr = null;

  /**
   * 
   * @var dateTime $registDate
   * @access public
   */
  public $registDate = null;

  /**
   * 
   * @var string $deactivationFlag
   * @access public
   */
  public $deactivationFlag = null;

  /**
   * 
   * @var string $deactivationFlagDescr
   * @access public
   */
  public $deactivationFlagDescr = null;

  /**
   * 
   * @var string $postalAddress
   * @access public
   */
  public $postalAddress = null;

  /**
   * 
   * @var string $firmFlagDescr
   * @access public
   */
  public $firmFlagDescr = null;

  /**
   * 
   * @var string $commerTitle
   * @access public
   */
  public $commerTitle = null;

  /**
   * 
   * @var string $postalAreaDescription
   * @access public
   */
  public $postalAreaDescription = null;

  /**
   * 
   * @var string $INiFlagDescr
   * @access public
   */
  public $INiFlagDescr = null;

  /**
   * 
   * @var string $postalZipCode
   * @access public
   */
  public $postalZipCode = null;

  /**
   * 
   * @access public
   */
  public function __construct()
  {
    parent::__construct();
  }

}
