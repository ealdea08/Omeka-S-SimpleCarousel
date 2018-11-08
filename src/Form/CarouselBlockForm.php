<?php
namespace SimpleCarousel\Form;

use Zend\Form\Element;
use Zend\Form\Form;

class CarouselBlockForm extends Form
{
	public function init()
	{
		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][height]',
            'type' => Element\Text::class,
            'options' => [
                'label' => 'Carousel height',
                'info' => 'Please enter a number with CSS units.',
            ],
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][duration]',
            'type' => Element\Number::class,
            'options' => [
				'label' => 'Duration (milliseconds)',
				'info' => 'Slide transition duration in milliseconds.'
            ],
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][perPage]',
            'type' => Element\Number::class,
            'options' => [
				'label' => 'Image Per page',
				'info' => 'The number of slides to be shown.'
			],
			'attributes' => [
				'min' => 1,
                'max' => 10,
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][loop]',
			'type' => Element\Checkbox::class,
            'options' => [
				'label' => 'Loop',
			]
		]);

		$this->add([
			'name' => 'o:block[__blockIndex__][o:data][draggable]',
			'type' => Element\Checkbox::class,
            'options' => [
				'label' => 'Draggable',
			]
		]);
	}
}