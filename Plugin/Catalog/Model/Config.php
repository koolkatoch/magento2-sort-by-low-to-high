<?php

namespace K2\Sortby\Plugin\Catalog\Model;

class Config
{
    public function afterGetAttributeUsedForSortByArray(
    \Magento\Catalog\Model\Config $catalogConfig,
    $options
    ) {

        $options['low_to_high'] = __('Price - Low To High');
        $options['high_to_low'] = __('Price - High To Low');
        return $options;

    }

}