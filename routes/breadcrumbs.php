<?php // routes/breadcrumbs.php

use App\Models\Slider;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Sliders
Breadcrumbs::for('slider.index', function (BreadcrumbTrail $trail) {
  $trail->parent('slider.index');
  $trail->push('Slider', route('slider.index'));
});

// Sliders > Upload Slider
Breadcrumbs::for('slider.create', function (BreadcrumbTrail $trail) {
  $trail->parent('slider.index');
  $trail->push('Upload Slider', route('slider.create'));
});

// Sliders > [Slider Name]
Breadcrumbs::for('slider.show', function (BreadcrumbTrail $trail, Slider $slider) {
  $trail->parent('slider.index');
  $trail->push($slider->title, route('slider.show', $slider));
});

// Sliders > [Slider Name] > Edit Slider
Breadcrumbs::for('slider.edit', function (BreadcrumbTrail $trail, Slider $slider) {
  $trail->parent('slider.show', $slider);
  $trail->push('Edit Slider', route('slider.edit', $slider));
});