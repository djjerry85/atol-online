<?php

declare(strict_types=1);

/**
 * This file is part of the it-quasar/atol-online library.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ItQuasar\AtolOnline;

class SellRefund extends Sell implements Request
{
  public function getOperation(): string
  {
    return 'sell_refund';
  }
}