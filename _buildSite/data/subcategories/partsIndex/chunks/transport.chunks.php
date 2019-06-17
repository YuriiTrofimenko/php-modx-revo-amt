<?php

$chunks = array();

$tmp = array(
    'indexContent' => array(
        'file' => 'content/indexContent',
        'description' => '',
    ),
    'historyOuterIndex' => array(
        'file' => 'partsIndex/historyOuterIndex',
        'description' => '',
    ),
    'historyItemIndex' => array(
        'file' => 'partsIndex/historyItemIndex',
        'description' => '',
    ),
    'toursOuterIndex' => array(
        'file' => 'partsIndex/toursOuterIndex',
        'description' => '',
    ),
    'toursItemIndex' => array(
        'file' => 'partsIndex/toursItemIndex',
        'description' => '',
    ),
    'productionOuterIndex' => array(
        'file' => 'partsIndex/productionOuterIndex',
        'description' => '',
    ),
    'productionItemIndex' => array(
        'file' => 'partsIndex/productionItemIndex',
        'description' => '',
    ),
    'offersSubscribeFormIndex' => array(
        'file' => 'partsIndex/offersSubscribeFormIndex',
        'description' => '',
    ),
    'offersSubscribeFormEmailIndex' => array(
        'file' => 'partsIndex/offersSubscribeFormEmailIndex',
        'description' => '',
    ),
    'eventsOuterIndex' => array(
        'file' => 'partsIndex/eventsOuterIndex',
        'description' => '',
    ),
    'eventsItemIndex' => array(
        'file' => 'partsIndex/eventsItemIndex',
        'description' => '',
    ),
    'reviewsPartnersOuterIndex' => array(
        'file' => 'partsIndex/reviewsPartnersOuterIndex',
        'description' => '',
    ),
    'reviewsItemIndex' => array(
        'file' => 'partsIndex/reviewsItemIndex',
        'description' => '',
    ),
    'eventsSubscribeFormIndex' => array(
        'file' => 'partsIndex/eventsSubscribeFormIndex',
        'description' => '',
    ),
    'eventsSubscribeFormEmailIndex' => array(
        'file' => 'partsIndex/eventsSubscribeFormEmailIndex',
        'description' => '',
    ),
    'contactFormIndex' => array(
        'file' => 'partsIndex/contactFormIndex',
        'description' => '',
    ),
    'contactFormEmailIndex' => array(
        'file' => 'partsIndex/contactFormEmailIndex',
        'description' => '',
    ),
    'historyFirstItemContent' => array(
        'file' => 'partsIndex/historyFirstItemContent',
        'description' => '',
    ),
    'ecologyItemIndex' => array(
        'file' => 'partsIndex/ecologyItemIndex',
        'description' => '',
    ),
    'ecologyFirstItemIndex' => array(
        'file' => 'partsIndex/ecologyFirstItemIndex',
        'description' => '',
    ),
    'partnersItemIndex' => array(
        'file' => 'partsIndex/partnersItemIndex',
        'description' => '',
    ),
    'partnersOuterIndex' => array(
        'file' => 'partsIndex/partnersOuterIndex',
        'description' => '',
    ),
    'eventsLastItemIndex' => array(
        'file' => 'partsIndex/eventsLastItemIndex',
        'description' => '',
    ),
);

// Save chunks for setup options
$BUILD_CHUNKS = array();

$chunkCategoryNameOld = '';
$i = 0;
foreach ($tmp as $k => $v) {

    /* @avr modChunk $chunk */
    $chunk = $modx->newObject('modChunk');
    $chunk->fromArray(array(
        'id' => 0,
        'name' => $k,
        'description' => @$v['description'],
        'snippet' => file_get_contents($sources['elements_core'].'chunks/'.$v['file'].'.tpl'),
        'static' => BUILD_CHUNK_STATIC,
        'source' => 1,
        'static_file' => 'assets/'.PKG_NAME_LOWER.'-elements/chunks/'.$v['file'].'.tpl',
    ),'',true,true);
    $chunks[] = $chunk;

    $BUILD_CHUNKS[$k] = file_get_contents($sources['elements_core'].'chunks/'.$v['file'].'.tpl');
}
unset($tmp);
return $chunks;