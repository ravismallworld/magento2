<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Setup\Test\Unit\Console\Command;

use Magento\Setup\Console\Command\InfoCurrencyListCommand;
use Symfony\Component\Console\Tester\CommandTester;

class InfoCurrencyListCommandTest extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        /** @var \Magento\Setup\Model\Lists|\PHPUnit_Framework_MockObject_MockObject $list */
        $list = $this->getMock('Magento\Setup\Model\Lists', [], [], '', false);
        $list->expects($this->once())->method('getCurrencyList')->will($this->returnValue([]));
        $commandTester = new CommandTester(new InfoCurrencyListCommand($list));
        $commandTester->execute([]);
    }
}
