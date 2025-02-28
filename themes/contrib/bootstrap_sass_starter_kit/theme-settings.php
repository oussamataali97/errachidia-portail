<?php

/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for Bootstrap 5 based theme style guide.
 */

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Markup;

/**
 * Implements hook_form_FORMID_alter().
 */
function bootstrap_sass_starter_kit_form_style_guide_theme_settings_alter(&$form, FormStateInterface $form_state, $form_id = NULL) {

  $form['title_colours'] = [
    '#markup' => Markup::create('<h2>Colours</h2>'),
  ];

  $content_theme_colours = '<div class="row">
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-primary rounded-3">Primary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-secondary rounded-3">Secondary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-success rounded-3">Success</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-danger rounded-3">Danger</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-warning rounded-3">Warning</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-info rounded-3">Info</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-light rounded-3">Light</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 text-bg-dark rounded-3">Dark</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-gradient rounded-3">Gradient</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-body-secondary text-white rounded-3">.bg-body-secondary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-body-tertiary rounded-3">.bg-body-tertiary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-white text-bg-warning rounded-3">.bg-white</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-black text-bg-warning text-white rounded-3">.bg-black</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-transparent text-white text-bg-warning rounded-3">bg-transparent</div>
  </div>
</div>';

  $form['theme_style_guide_colors'] = [
    '#type' => 'details',
    '#title' => t('Colors'),
  ];

  $form['theme_style_guide_colors']['markup'] = [
    '#prefix' => $content_theme_colours,
  ];

  $content_theme_colours_opacity = '<div class="row">
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-opacity-10 text-bg-warning rounded-3">text-bg-warning .bg-opacity-10</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-opacity-25 text-bg-warning rounded-3">text-bg-warning .bg-opacity-25</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-opacity-50 text-bg-warning rounded-3">text-bg-warning .bg-opacity-50</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-opacity-75 text-bg-warning rounded-3">text-bg-warning .bg-opacity-75</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-opacity-100 text-bg-warning rounded-3">text-bg-warning .bg-opacity-100</div>
  </div>
</div>';

  $form['theme_style_guide_colors_opacity'] = [
    '#type' => 'details',
    '#title' => t('Colors Opacity'),
  ];

  $form['theme_style_guide_colors_opacity']['markup'] = [
    '#prefix' => $content_theme_colours_opacity,
  ];

  $content_theme_colours_subtle = '<div class="row">
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-primary-subtle rounded-3">Primary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-secondary-subtle rounded-3">Secondary</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-success-subtle rounded-3">Success</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-danger-subtle rounded-3">Danger</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-warning-subtle rounded-3">Warning</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-info-subtle rounded-3">Info</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-light-subtle rounded-3">Light</div>
  </div>
  <div class="col-md-4">
    <div class="p-3 mb-3 bg-dark-subtle rounded-3">Dark</div>
  </div>
</div>';

  $form['theme_style_guide_colors_subtle'] = [
    '#type' => 'details',
    '#title' => t('Colors Subtle'),
  ];

  $form['theme_style_guide_colors_subtle']['markup'] = [
    '#prefix' => $content_theme_colours_subtle,
  ];

  $content_all_colours = '<div class="row font-monospace">
  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-blue-500">
      <strong class="d-block">$blue</strong>
      #0d6efd
    </div>
    <div class="p-3 bssk-bg-blue-100">$blue-100</div>
    <div class="p-3 bssk-bg-blue-200">$blue-200</div>
    <div class="p-3 bssk-bg-blue-300">$blue-300</div>
    <div class="p-3 bssk-bg-blue-400">$blue-400</div>
    <div class="p-3 bssk-bg-blue-500">$blue-500</div>
    <div class="p-3 bssk-bg-blue-600">$blue-600</div>
    <div class="p-3 bssk-bg-blue-700">$blue-700</div>
    <div class="p-3 bssk-bg-blue-800">$blue-800</div>
    <div class="p-3 bssk-bg-blue-900">$blue-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-indigo-500">
      <strong class="d-block">$indigo</strong>
      #6610f2
    </div>
    <div class="p-3 bssk-bg-indigo-100">$indigo-100</div>
    <div class="p-3 bssk-bg-indigo-200">$indigo-200</div>
    <div class="p-3 bssk-bg-indigo-300">$indigo-300</div>
    <div class="p-3 bssk-bg-indigo-400">$indigo-400</div>
    <div class="p-3 bssk-bg-indigo-500">$indigo-500</div>
    <div class="p-3 bssk-bg-indigo-600">$indigo-600</div>
    <div class="p-3 bssk-bg-indigo-700">$indigo-700</div>
    <div class="p-3 bssk-bg-indigo-800">$indigo-800</div>
    <div class="p-3 bssk-bg-indigo-900">$indigo-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-purple-500">
      <strong class="d-block">$purple</strong>
      #6f42c1
    </div>
    <div class="p-3 bssk-bg-purple-100">$purple-100</div>
    <div class="p-3 bssk-bg-purple-200">$purple-200</div>
    <div class="p-3 bssk-bg-purple-300">$purple-300</div>
    <div class="p-3 bssk-bg-purple-400">$purple-400</div>
    <div class="p-3 bssk-bg-purple-500">$purple-500</div>
    <div class="p-3 bssk-bg-purple-600">$purple-600</div>
    <div class="p-3 bssk-bg-purple-700">$purple-700</div>
    <div class="p-3 bssk-bg-purple-800">$purple-800</div>
    <div class="p-3 bssk-bg-purple-900">$purple-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-pink-500">
      <strong class="d-block">$pink</strong>
      #d63384
    </div>
    <div class="p-3 bssk-bg-pink-100">$pink-100</div>
    <div class="p-3 bssk-bg-pink-200">$pink-200</div>
    <div class="p-3 bssk-bg-pink-300">$pink-300</div>
    <div class="p-3 bssk-bg-pink-400">$pink-400</div>
    <div class="p-3 bssk-bg-pink-500">$pink-500</div>
    <div class="p-3 bssk-bg-pink-600">$pink-600</div>
    <div class="p-3 bssk-bg-pink-700">$pink-700</div>
    <div class="p-3 bssk-bg-pink-800">$pink-800</div>
    <div class="p-3 bssk-bg-pink-900">$pink-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-red-500">
      <strong class="d-block">$red</strong>
      #dc3545
    </div>
    <div class="p-3 bssk-bg-red-100">$red-100</div>
    <div class="p-3 bssk-bg-red-200">$red-200</div>
    <div class="p-3 bssk-bg-red-300">$red-300</div>
    <div class="p-3 bssk-bg-red-400">$red-400</div>
    <div class="p-3 bssk-bg-red-500">$red-500</div>
    <div class="p-3 bssk-bg-red-600">$red-600</div>
    <div class="p-3 bssk-bg-red-700">$red-700</div>
    <div class="p-3 bssk-bg-red-800">$red-800</div>
    <div class="p-3 bssk-bg-red-900">$red-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-orange-500">
      <strong class="d-block">$orange</strong>
      #fd7e14
    </div>
    <div class="p-3 bssk-bg-orange-100">$orange-100</div>
    <div class="p-3 bssk-bg-orange-200">$orange-200</div>
    <div class="p-3 bssk-bg-orange-300">$orange-300</div>
    <div class="p-3 bssk-bg-orange-400">$orange-400</div>
    <div class="p-3 bssk-bg-orange-500">$orange-500</div>
    <div class="p-3 bssk-bg-orange-600">$orange-600</div>
    <div class="p-3 bssk-bg-orange-700">$orange-700</div>
    <div class="p-3 bssk-bg-orange-800">$orange-800</div>
    <div class="p-3 bssk-bg-orange-900">$orange-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-yellow-500">
      <strong class="d-block">$yellow</strong>
      #ffc107
    </div>
    <div class="p-3 bssk-bg-yellow-100">$yellow-100</div>
    <div class="p-3 bssk-bg-yellow-200">$yellow-200</div>
    <div class="p-3 bssk-bg-yellow-300">$yellow-300</div>
    <div class="p-3 bssk-bg-yellow-400">$yellow-400</div>
    <div class="p-3 bssk-bg-yellow-500">$yellow-500</div>
    <div class="p-3 bssk-bg-yellow-600">$yellow-600</div>
    <div class="p-3 bssk-bg-yellow-700">$yellow-700</div>
    <div class="p-3 bssk-bg-yellow-800">$yellow-800</div>
    <div class="p-3 bssk-bg-yellow-900">$yellow-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-green-500">
      <strong class="d-block">$green</strong>
      #198754
    </div>
    <div class="p-3 bssk-bg-green-100">$green-100</div>
    <div class="p-3 bssk-bg-green-200">$green-200</div>
    <div class="p-3 bssk-bg-green-300">$green-300</div>
    <div class="p-3 bssk-bg-green-400">$green-400</div>
    <div class="p-3 bssk-bg-green-500">$green-500</div>
    <div class="p-3 bssk-bg-green-600">$green-600</div>
    <div class="p-3 bssk-bg-green-700">$green-700</div>
    <div class="p-3 bssk-bg-green-800">$green-800</div>
    <div class="p-3 bssk-bg-green-900">$green-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-teal-500">
      <strong class="d-block">$teal</strong>
      #20c997
    </div>
    <div class="p-3 bssk-bg-teal-100">$teal-100</div>
    <div class="p-3 bssk-bg-teal-200">$teal-200</div>
    <div class="p-3 bssk-bg-teal-300">$teal-300</div>
    <div class="p-3 bssk-bg-teal-400">$teal-400</div>
    <div class="p-3 bssk-bg-teal-500">$teal-500</div>
    <div class="p-3 bssk-bg-teal-600">$teal-600</div>
    <div class="p-3 bssk-bg-teal-700">$teal-700</div>
    <div class="p-3 bssk-bg-teal-800">$teal-800</div>
    <div class="p-3 bssk-bg-teal-900">$teal-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-cyan-500">
      <strong class="d-block">$cyan</strong>
      #0dcaf0
    </div>
    <div class="p-3 bssk-bg-cyan-100">$cyan-100</div>
    <div class="p-3 bssk-bg-cyan-200">$cyan-200</div>
    <div class="p-3 bssk-bg-cyan-300">$cyan-300</div>
    <div class="p-3 bssk-bg-cyan-400">$cyan-400</div>
    <div class="p-3 bssk-bg-cyan-500">$cyan-500</div>
    <div class="p-3 bssk-bg-cyan-600">$cyan-600</div>
    <div class="p-3 bssk-bg-cyan-700">$cyan-700</div>
    <div class="p-3 bssk-bg-cyan-800">$cyan-800</div>
    <div class="p-3 bssk-bg-cyan-900">$cyan-900</div>
  </div>
  
  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 position-relative bssk-bg-gray-500">
      <strong class="d-block">$gray</strong>
      #adb5bd
    </div>
    <div class="p-3 bssk-bg-gray-100">$gray-100</div>

    <div class="p-3 bssk-bg-gray-200">$gray-200</div>

    <div class="p-3 bssk-bg-gray-300">$gray-300</div>

    <div class="p-3 bssk-bg-gray-400">$gray-400</div>

    <div class="p-3 bssk-bg-gray-500">$gray-500</div>

    <div class="p-3 bssk-bg-gray-600">$gray-600</div>

    <div class="p-3 bssk-bg-gray-700">$gray-700</div>

    <div class="p-3 bssk-bg-gray-800">$gray-800</div>

    <div class="p-3 bssk-bg-gray-900">$gray-900</div>
  </div>

  <div class="col-md-4 mb-3">
    <div class="p-3 mb-2 bssk-bg-black text-white">
      <strong class="d-block">$black</strong>
      #000
    </div>
    <div class="p-3 mb-2 bssk-bg-white border">
      <strong class="d-block">$white</strong>
      #fff
    </div>
  </div>
</div>';

  $form['all_colours'] = [
    '#type' => 'details',
    '#title' => t('All colours'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['all_colours']['markup'] = [
    '#prefix' => $content_all_colours,
    // '#attributes' => $attributes,
  ];

  $content_navigation_variation = '<nav class="navbar navbar-expand-lg mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor011" aria-controls="navbarColor011" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor011">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

  $content_navigation_default = '<nav class="navbar navbar-expand-lg bg-primary mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

  $content_navigation_dark = '<nav class="navbar navbar-expand-lg bg-dark mb-3" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

  $content_navigation_light = '<nav class="navbar navbar-expand-lg bg-light mb-3" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

  $content_navigation_tertiary = '<nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor04" aria-controls="navbarColor04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor04">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';

  $form['title_navigation'] = [
    '#markup' => Markup::create('<h2>Navbars</h2>'),
  ];

  $form['content_navigation'] = [
    '#type' => 'details',
    '#title' => t('Navigation'),
  ];

  $form['content_navigation']['variation'] = [
    '#markup' => Markup::create($content_navigation_variation),
  ];
  $form['content_navigation']['default'] = [
    '#markup' => Markup::create($content_navigation_default),
  ];

  $form['content_navigation']['dark'] = [
    '#markup' => Markup::create($content_navigation_dark),
  ];

  $form['content_navigation']['light'] = [
    '#markup' => Markup::create($content_navigation_light),
  ];

  $form['content_navigation']['tertiary'] = [
    '#markup' => Markup::create($content_navigation_tertiary),
  ];

  $content_icons = '<div class="d-flex gap-4 flex-wrap fs-1 mt-4 mb-5">
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-boombox text-primary"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-twitter text-info"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-emoji-laughing text-warning"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-inboxes-fill text-success"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-balloon-fill text-danger"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-cup-hot-fill text-muted"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-device-ssd-fill"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-easel2-fill"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-filetype-doc"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-car-front-fill"></i></div>
        <div class="px-4 py-3 bg-light rounded-2"><i class="bi bi-person-circle"></i></div>
      </div>';

  $form['title_icons'] = [
    '#markup' => Markup::create('<h2>Icons</h2>'),
  ];

  $form['content_icons'] = [
    '#type' => 'details',
    '#title' => t('Icons'),
  ];

  $form['content_icons']['icons'] = [
    '#markup' => Markup::create($content_icons),
  ];

  $form['title_buttons'] = [
    '#markup' => Markup::create('<h2>Buttons</h2>'),
  ];

  $content_buttons_bs = '
  <div class="bs-docs-section">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h1 id="buttons">Buttons</h1>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <p class="bs-component">
              <button type="button" class="btn btn-primary">Primary</button>
              <button type="button" class="btn btn-secondary">Secondary</button>
              <button type="button" class="btn btn-success">Success</button>
              <button type="button" class="btn btn-info">Info</button>
              <button type="button" class="btn btn-warning">Warning</button>
              <button type="button" class="btn btn-danger">Danger</button>
              <button type="button" class="btn btn-light">Light</button>
              <button type="button" class="btn btn-dark">Dark</button>
              <button type="button" class="btn btn-link">Link</button>

            <p class="bs-component">
              <button type="button" class="btn btn-primary disabled">Primary</button>
              <button type="button" class="btn btn-secondary disabled">Secondary</button>
              <button type="button" class="btn btn-success disabled">Success</button>
              <button type="button" class="btn btn-info disabled">Info</button>
              <button type="button" class="btn btn-warning disabled">Warning</button>
              <button type="button" class="btn btn-danger disabled">Danger</button>
              <button type="button" class="btn btn-light disabled">Light</button>
              <button type="button" class="btn btn-dark disabled">Dark</button>
              <button type="button" class="btn btn-link disabled">Link</button>

            <p class="bs-component">
              <button type="button" class="btn btn-outline-primary">Primary</button>
              <button type="button" class="btn btn-outline-secondary">Secondary</button>
              <button type="button" class="btn btn-outline-success">Success</button>
              <button type="button" class="btn btn-outline-info">Info</button>
              <button type="button" class="btn btn-outline-warning">Warning</button>
              <button type="button" class="btn btn-outline-danger">Danger</button>
              <button type="button" class="btn btn-outline-light">Light</button>
              <button type="button" class="btn btn-outline-dark">Dark</button>

            <div class="bs-component">
              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-primary">Primary</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                  </div>
                </div>
              </div>

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-success">Success</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                  </div>
                </div>
              </div>

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-info">Info</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop3" type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                  </div>
                </div>
              </div>

              <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-danger">Danger</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop4" type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop4">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                  </div>
                </div>
              </div>

            <div class="bs-component">
              <button type="button" class="btn btn-primary btn-lg">Large button</button>
              <button type="button" class="btn btn-primary">Default button</button>
              <button type="button" class="btn btn-primary btn-sm">Small button</button>
          </div>
          <div class="col-lg-12">
            <div class="bs-component">
              <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="button">Block button</button>
                <button class="btn btn-lg btn-primary" type="button">Block button</button>
              </div>

            <div class="bs-component mb-3">
              <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" checked="" autocomplete="off">
                <label class="btn btn-primary" for="btncheck1">Checkbox 1</label>
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-primary" for="btncheck2">Checkbox 2</label>
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-primary" for="btncheck3">Checkbox 3</label>
              </div>

            <div class="bs-component mb-3">
              <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
                <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" checked="">
                <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off" checked="">
                <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
              </div>

            <div class="bs-component">
              <div class="btn-group-vertical">
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
                <button type="button" class="btn btn-primary">Button</button>
              </div>

            <div class="bs-component mb-3">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
              </div>

            <div class="bs-component mb-3">
              <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group me-2" role="group" aria-label="First group">
                  <button type="button" class="btn btn-secondary">1</button>
                  <button type="button" class="btn btn-secondary">2</button>
                  <button type="button" class="btn btn-secondary">3</button>
                  <button type="button" class="btn btn-secondary">4</button>
                </div>
                <div class="btn-group me-2" role="group" aria-label="Second group">
                  <button type="button" class="btn btn-secondary">5</button>
                  <button type="button" class="btn btn-secondary">6</button>
                  <button type="button" class="btn btn-secondary">7</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-secondary">8</button>
                </div>
              </div>
          </div>
        </div>
      </div>';

  $form['content_buttons_bs'] = [
    '#type' => 'details',
    '#title' => t('Content Buttons BS'),
    '#group' => 'bootstrap',
  ];

  $form['content_buttons_bs']['markup'] = [
    '#markup' => Markup::create($content_buttons_bs),
  ];

  $form['content_buttons'] = [
    '#type' => 'details',
    '#title' => t('Content Buttons'),
    '#group' => 'bootstrap',
  ];

  $form['content_buttons']['button_primary'] = [
    '#type' => 'submit',
    '#title' => t('Primary'),
    '#value' => t('Primary'),
    '#attributes' => ['class' => ['btn', 'btn-primary']],
  ];

  $form['content_buttons']['button_secondary'] = [
    '#type' => 'button',
    '#title' => t('Secondary'),
    '#value' => t('Secondary'),
    '#attributes' => ['class' => ['btn', 'btn-secondary']],
  ];

  $form['content_buttons']['button_success'] = [
    '#type' => 'button',
    '#title' => t('Success'),
    '#value' => t('Success'),
    '#attributes' => ['class' => ['btn', 'btn-success']],
  ];

  $form['content_buttons']['button_info'] = [
    '#type' => 'button',
    '#title' => t('Info'),
    '#value' => t('Info'),
    '#attributes' => ['class' => ['btn', 'btn-info']],
  ];

  $form['content_buttons']['button_warning'] = [
    '#type' => 'button',
    '#title' => t('Warning'),
    '#value' => t('Warning'),
    '#attributes' => ['class' => ['btn', 'btn-warning']],
  ];

  $form['content_buttons']['button_danger'] = [
    '#type' => 'button',
    '#title' => t('Danger'),
    '#value' => t('Danger'),
    '#attributes' => ['class' => ['btn', 'btn-danger']],
  ];

  $form['content_buttons']['button_light'] = [
    '#type' => 'button',
    '#title' => t('Light'),
    '#value' => t('Light'),
    '#attributes' => ['class' => ['btn', 'btn-light']],
  ];

  $form['content_buttons']['button_dark'] = [
    '#type' => 'button',
    '#title' => t('Dark'),
    '#value' => t('Dark'),
    '#attributes' => ['class' => ['btn', 'btn-dark']],
  ];

  $form['content_buttons']['button_link'] = [
    '#type' => 'button',
    '#title' => t('Link'),
    '#value' => t('Link'),
    '#attributes' => ['class' => ['btn', 'btn-link']],
    '#suffix' => '<br/>',
  ];

  // Disabled.
  $form['content_buttons']['button_primary_disabled'] = [
    '#type' => 'button',
    '#title' => t('Primary Disabled'),
    '#value' => t('Primary Disabled'),
    '#attributes' => ['class' => ['btn', 'btn-primary', 'disabled']],
  ];

  $form['content_buttons']['button_secondary_disabled'] = [
    '#type' => 'button',
    '#title' => t('Secondary'),
    '#value' => t('Secondary'),
    '#attributes' => ['class' => ['btn', 'btn-secondary', 'disabled']],
  ];

  $form['content_buttons']['button_success_disabled'] = [
    '#type' => 'button',
    '#title' => t('Success'),
    '#value' => t('Success'),
    '#attributes' => ['class' => ['btn', 'btn-success', 'disabled']],
  ];

  $form['content_buttons']['button_info_disabled'] = [
    '#type' => 'button',
    '#title' => t('Info'),
    '#value' => t('Info'),
    '#attributes' => ['class' => ['btn', 'btn-info', 'disabled']],
  ];

  $form['content_buttons']['button_warning_disabled'] = [
    '#type' => 'button',
    '#title' => t('Warning'),
    '#value' => t('Warning'),
    '#attributes' => ['class' => ['btn', 'btn-warning', 'disabled']],
  ];

  $form['content_buttons']['button_danger_disabled'] = [
    '#type' => 'button',
    '#title' => t('Danger'),
    '#value' => t('Danger'),
    '#attributes' => ['class' => ['btn', 'btn-danger', 'disabled']],
  ];

  $form['content_buttons']['button_light_disabled'] = [
    '#type' => 'button',
    '#title' => t('Light'),
    '#value' => t('Light'),
    '#attributes' => ['class' => ['btn', 'btn-light', 'disabled']],
  ];

  $form['content_buttons']['button_dark_disabled'] = [
    '#type' => 'button',
    '#title' => t('Dark'),
    '#value' => t('Dark'),
    '#attributes' => ['class' => ['btn', 'btn-dark', 'disabled']],
  ];

  $form['content_buttons']['button_link_disabled'] = [
    '#type' => 'button',
    '#title' => t('Link'),
    '#value' => t('Link'),
    '#attributes' => ['class' => ['btn', 'btn-link', 'disabled']],
    '#suffix' => '<br/>',
  ];

  // Outlined.
  $form['content_buttons']['button_primary_outlined'] = [
    '#prefix' => '<div class="btn-group-vertical">',
    '#type' => 'button',
    '#title' => t('Primary Outlined'),
    '#value' => t('Primary Outlined'),
    '#attributes' => ['class' => ['btn', 'btn-outline-primary']],
  ];

  $form['content_buttons']['button_secondary_outlined'] = [
    '#type' => 'button',
    '#title' => t('Secondary'),
    '#value' => t('Secondary'),
    '#attributes' => ['class' => ['btn', 'btn-outline-secondary']],
  ];

  $form['content_buttons']['button_success_outlined'] = [
    '#type' => 'button',
    '#title' => t('Success'),
    '#value' => t('Success'),
    '#attributes' => ['class' => ['btn', 'btn-outline-success']],
  ];

  $form['content_buttons']['button_info_outlined'] = [
    '#type' => 'button',
    '#title' => t('Info'),
    '#value' => t('Info'),
    '#attributes' => ['class' => ['btn', 'btn-outline-info']],
  ];

  $form['content_buttons']['button_warning_outlined'] = [
    '#type' => 'button',
    '#title' => t('Warning'),
    '#value' => t('Warning'),
    '#attributes' => ['class' => ['btn', 'btn-outline-warning']],
  ];

  $form['content_buttons']['button_danger_outlined'] = [
    '#type' => 'button',
    '#title' => t('Danger'),
    '#value' => t('Danger'),
    '#attributes' => ['class' => ['btn', 'btn-outline-danger']],
  ];

  $form['content_buttons']['button_light_outlined'] = [
    '#type' => 'button',
    '#title' => t('Light'),
    '#value' => t('Light'),
    '#attributes' => ['class' => ['btn', 'btn-outline-light']],
  ];

  $form['content_buttons']['button_dark_outlined'] = [
    '#type' => 'button',
    '#title' => t('Dark'),
    '#value' => t('Dark'),
    '#attributes' => ['class' => ['btn', 'btn-outline-dark']],
  ];

  $form['content_buttons']['button_link_outlined'] = [
    '#type' => 'button',
    '#title' => t('Link'),
    '#value' => t('Link'),
    '#attributes' => ['class' => ['btn', 'btn-outline-link']],
    '#suffix' => '</div>',
  ];

  $form['content_buttons']['button_small'] = [
    '#type' => 'button',
    '#title' => t('Small'),
    '#value' => t('Small'),
    '#attributes' => ['class' => ['btn', 'btn-primary', 'btn-sm']],
  ];

  $form['content_buttons']['button_regular'] = [
    '#type' => 'button',
    '#title' => t('Regular'),
    '#value' => t('Regular'),
    '#attributes' => ['class' => ['btn', 'btn-primary']],
  ];

  $form['content_buttons']['button_large'] = [
    '#type' => 'button',
    '#title' => t('Large'),
    '#value' => t('Large'),
    '#attributes' => ['class' => ['btn', 'btn-primary', 'btn-lg']],
  ];

  $form['content_buttons']['button_large_container'] = [
    '#prefix' => '<div class="d-grid gap-2">',
    '#type' => 'button',
    '#title' => t('Large'),
    '#value' => t('Large'),
    '#attributes' => ['class' => ['btn', 'btn-primary', 'btn-lg']],
    '#suffix' => '</div>',
  ];

  $form['content_buttons']['button_checkbox'] = [
    '#type' => 'checkbox',
    '#title' => t('Checkbox'),
    '#value' => t('Checkbox'),
  ];

  $form['content_buttons']['button_checkbox_wrapper'] = [
    '#type' => 'checkbox',
    '#title' => t('Checkbox'),
    '#value' => t('Checkbox'),
    '#attributes' => ['class' => ['btn-check']],
    '#label_attributes' => ['class' => ['btn', 'btn-primary']],
  ];

  // The options to display in our checkboxes.
  $toppings = [
    'pepperoni' => t('Pepperoni'),
    'black_olives' => t('Black olives'),
    'veggies' => t('Veggies'),
  ];

  // The drupal checkboxes form field definition.
  $form['content_buttons']['checkboxes'] = [
    '#title' => t('Checkboxes'),
    '#type' => 'checkboxes',
    '#description' => t('Select the pizza toppings you would like.'),
    '#title_display' => 'after',
    '#label_attributes' => ['class' => ['btn', 'btn-primary']],
    '#options' => $toppings,
  ];

  // The drupal checkboxes form field definition.
  $form['content_buttons']['checkboxes_wrapper'] = [
    '#prefix' => '<div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">',
    '#title' => t('Checkboxes with wrapper'),
    '#type' => 'checkboxes',
    '#description' => t('Select the pizza toppings you would like.'),
    '#options' => $toppings,
    '#label_attributes' => ['class' => ['btn', 'btn-primary']],

    '#suffix' => '</div>',

  ];

  $form['content_buttons']['button_radio'] = [
    '#type' => 'radio',
    '#title' => t('Radio'),
    '#value' => t('Radio'),
  ];

  // The drupal checkboxes form field definition.
  $form['content_buttons']['radios'] = [
    '#title' => t('Radios'),
    '#type' => 'radios',
    '#description' => t('Select the pizza toppings you would like.'),
    '#options' => $toppings,
  ];

  // The drupal checkboxes form field definition.
  $form['content_buttons']['radios_bootstrap'] = [
    '#title' => t('Radios'),
    '#type' => 'radios',
    '#description' => t('Select the pizza toppings you would like.'),
    '#options' => $toppings,
    '#attributes' => ['class' => ['btn-check']],
  ];

  $content_text_emphasis = '<p class="text-primary">.text-primary</p>
<p class="text-primary-emphasis">.text-primary-emphasis</p>
<p class="text-secondary">.text-secondary</p>
<p class="text-secondary-emphasis">.text-secondary-emphasis</p>
<p class="text-success">.text-success</p>
<p class="text-success-emphasis">.text-success-emphasis</p>
<p class="text-danger">.text-danger</p>
<p class="text-danger-emphasis">.text-danger-emphasis</p>
<p class="text-warning">.text-warning</p>
<p class="text-warning-emphasis">.text-warning-emphasis</p>
<p class="text-info">.text-info</p>
<p class="text-info-emphasis">.text-info-emphasis</p>
<p class="text-light">.text-light</p>
<p class="text-light-emphasis">.text-light-emphasis</p>
<p class="text-dark bssk-bg-white">.text-dark</p>
<p class="text-dark-emphasis">.text-dark-emphasis</p>
<p class="text-body">.text-body</p>
<p class="text-body-emphasis">.text-body-emphasis</p>
<p class="text-body-secondary">.text-body-secondary</p>
<p class="text-body-tertiary">.text-body-tertiary</p>
<p class="text-black bssk-bg-white">.text-black</p>
<p class="text-black-50 bssk-bg-white">.text-black-50</p>
<p class="text-white">.text-white</p>
<p class="text-white-50">.text-white-50</p>
<p class="text-blue-100">.text-blue-100</p>
<p class="text-blue-200">.text-white-200</p>
<p class="text-blue-300">.text-blue-300</p>
<p class="text-blue-400">.text-white-400</p>
<p class="text-blue-500">.text-blue-500</p>
<p class="text-blue-600">.text-white-600</p>
<p class="text-blue-700">.text-blue-700</p>
<p class="text-blue-800">.text-white-800</p>
<p class="text-blue-900">.text-white-900</p>';

  $form['title_typography'] = [
    '#markup' => Markup::create('<h2>Typography</h2>'),
  ];

  $content_headings = '<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>
<h3>
  Heading
  <small class="text-body-secondary">with faded secondary text</small>
</h3>
<p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>';

  $content_headings_display = '
  <h1 class="display-1">Display 1</h1>
  <h1 class="display-2">Display 2</h1>
  <h1 class="display-3">Display 3</h1>
  <h1 class="display-4">Display 4</h1>
  <h1 class="display-5">Display 5</h1>
  <h1 class="display-6">Display 6</h1>';

  $content_body = '
  <h2>Example body text</h2>
<p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p>The following is <strong>rendered as bold text</strong>.</p>
<p>The following is <em>rendered as italicized text</em>.</p>
<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>';

  $form['headings'] = [
    '#type' => 'details',
    '#title' => t('Headings'),
    '#group' => 'bootstrap',
  ];

  $form['headings']['markup'] = [
    '#prefix' => $content_headings,
  ];

  $form['headings_display'] = [
    '#type' => 'details',
    '#title' => t('Headings Display'),
    '#group' => 'bootstrap',
  ];

  $form['headings_display']['markup'] = [
    '#prefix' => $content_headings_display,
  ];

  $form['content_body'] = [
    '#type' => 'details',
    '#title' => t('Content Body'),
    '#group' => 'bootstrap',
  ];
  $form['content_body']['markup'] = [
    '#prefix' => $content_body,
  ];

  // All Colours.
  $form['text_emphasis'] = [
    '#type' => 'details',
    '#title' => t('Text Emphasis'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['text_emphasis']['markup'] = [
    '#prefix' => $content_text_emphasis,
  ];

  $content_links = '<p><a class="link-opacity-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-100" href="#">Link opacity 100</a></p>

<p><a class="link-opacity-hover-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-hover-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-hover-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-hover-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-hover-100" href="#">Link opacity 100</a></p>
';

  // All Colours.
  $form['content_links'] = [
    '#type' => 'details',
    '#title' => t('Content Links'),
    '#group' => 'bootstrap',
  ];

  $form['content_links']['markup'] = [
    '#prefix' => $content_links,
  ];

  $content_links_light_dark = '
<div style="--bssk-link-color: #0d6efd; --bssk-link-hover-color: #0a58ca;   --bssk-link-color-rgb: 13, 110, 253; --bssk-link-hover-color-rgb: 10, 88, 202; ">
  <h3>light Link items</h3>
<p><a class="link-opacity-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-100" href="#">Link opacity 100</a></p>

<p><a class="link-opacity-hover-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-hover-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-hover-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-hover-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-hover-100" href="#">Link opacity 100</a></p>
</div>

<div style="--bssk-link-color: #569afe;  --bssk-link-color-rgb: 86, 154, 254; --bssk-link-hover-color: #78aefe;   --bssk-link-hover-color-rgb: 120, 174, 254; ">
  <h3>dark Link items</h3>
  <p><a class="link-opacity-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-100" href="#">Link opacity 100</a></p>

<p><a class="link-opacity-hover-10" href="#">Link opacity 10</a></p>
<p><a class="link-opacity-hover-25" href="#">Link opacity 25</a></p>
<p><a class="link-opacity-hover-50" href="#">Link opacity 50</a></p>
<p><a class="link-opacity-hover-75" href="#">Link opacity 75</a></p>
<p><a class="link-opacity-hover-100" href="#">Link opacity 100</a></p>
</div>
';

  $form['content_links_light_dark'] = [
    '#type' => 'details',
    '#title' => t('Content Links Light/Dark'),
    '#group' => 'bootstrap',
  ];

  $form['content_links_light_dark']['markup'] = [
    '#markup' => Markup::create($content_links_light_dark),
  ];

  $content_styles = '<p class="lead">
  This is a lead paragraph. It stands out from regular paragraphs.
</p>
<p>You can use the mark tag to <mark>highlight</mark> text.</p>
<p><del>This line of text is meant to be treated as deleted text.</del></p>
<p><s>This line of text is meant to be treated as no longer accurate.</s></p>
<p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
<p><u>This line of text will render as underlined.</u></p>
<p><small>This line of text is meant to be treated as fine print.</small></p>
<p><strong>This line rendered as bold text.</strong></p>
<p><em>This line rendered as italicized text.</em></p>
<p><abbr title="attribute">attr</abbr></p>
<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr></p>
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>
<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
<figure class="text-end">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
';

  $content_blockquotes = '
<blockquote class="blockquote">
  <p>A well-known quote, contained in a blockquote element.</p>
</blockquote>
<figure>
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
<figure class="text-center">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
<figure class="text-end">
  <blockquote class="blockquote">
    <p>A well-known quote, contained in a blockquote element.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    Someone famous in <cite title="Source Title">Source Title</cite>
  </figcaption>
</figure>
';
  // All Colours.
  $form['content_styles'] = [
    '#type' => 'details',
    '#title' => t('Content Styles'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['content_styles']['markup'] = [
    '#prefix' => $content_styles,
    // '#attributes' => $attributes,
  ];

  $form['content_blockquotes'] = [
    '#type' => 'details',
    '#title' => t('Blockquotes'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['content_blockquotes']['markup'] = [
    '#prefix' => $content_blockquotes,
    // '#attributes' => $attributes,
  ];

  $content_lists = '
  <div class="bd-example">
<ul>
<li>All lists have their top margin removed</li>
<li>And their bottom margin normalized</li>
<li>Nested lists have no bottom margin
<ul>
<li>This way they have a more even appearance</li>
<li>Particularly when followed by more list items</li>
</ul>
</li>
<li>The left padding has also been reset</li>
</ul>
<ol>
<li>Here’s an ordered list</li>
<li>With a few list items</li>
<li>It has the same overall look</li>
<li>As the previous unordered list</li>
</ol>

</div>
<ul class="list-unstyled">
  <li>This is a list.</li>
  <li>It appears completely unstyled.</li>
  <li>Structurally, it\'s still a list.</li>
  <li>However, this style only applies to immediate child elements.</li>
  <li>Nested lists:
    <ul>
      <li>are unaffected by this style</li>
      <li>will still show a bullet</li>
      <li>and have appropriate left margin</li>
    </ul>
  </li>
  <li>This may still come in handy in some situations.</li>
</ul>
<ul class="list-inline">
  <li class="list-inline-item">This is a list item.</li>
  <li class="list-inline-item">And another one.</li>
  <li class="list-inline-item">But they\'re displayed inline.</li>
</ul>
<dl class="row">
  <dt class="col-sm-3">Description lists</dt>
  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

  <dt class="col-sm-3">Term</dt>
  <dd class="col-sm-9">
    <p>Definition for the term.</p>
    <p>And some more placeholder definition text.</p>
  </dd>

  <dt class="col-sm-3">Another term</dt>
  <dd class="col-sm-9">This definition is short, so no extra paragraphs or anything.</dd>

  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
  <dd class="col-sm-9">This can be useful when space is tight. Adds an ellipsis at the end.</dd>

  <dt class="col-sm-3">Nesting</dt>
  <dd class="col-sm-9">
    <dl class="row">
      <dt class="col-sm-4">Nested definition list</dt>
      <dd class="col-sm-8">I heard you like definition lists. Let me put a definition list inside your definition list.</dd>
    </dl>
  </dd>
</dl>
<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A list item
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A second list item
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    A third list item
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>';

  // All Colours.
  $form['content_lists'] = [
    '#type' => 'details',
    '#title' => t('Content Lists'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['content_lists']['markup'] = [
    '#prefix' => $content_lists,
    // '#attributes' => $attributes,
  ];

  $content_code_blocks = '
  For example, <code>&lt;section&gt;</code> should be wrapped as inline.
<pre><code>&lt;p&gt;Sample text here...&lt;/p&gt;
&lt;p&gt;And another line of sample text here...&lt;/p&gt;
</code></pre>
<var>y</var> = <var>m</var><var>x</var> + <var>b</var>
To switch directories, type <kbd>cd</kbd> followed by the name of the directory.<br>
To edit settings, press <kbd><kbd>Ctrl</kbd> + <kbd>,</kbd></kbd>
<samp>This text is meant to be treated as sample output from a computer program.</samp>

  ';

  $form['code_blocks'] = [
    '#type' => 'details',
    '#title' => t('Code blocks'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['code_blocks']['markup'] = [
    '#prefix' => $content_code_blocks,
    // '#attributes' => $attributes,
  ];

  $form['title_tables'] = [
    '#markup' => Markup::create('<h2>Tables</h2>'),
  ];

  $content_tables = '
   <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<div class="bd-example">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Class</th>
        <th scope="col">Heading</th>
        <th scope="col">Heading</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Default</th>
        <td>Cell</td>
        <td>Cell</td>
      </tr>

        <tr class="table-primary">
          <th scope="row">Primary</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-secondary">
          <th scope="row">Secondary</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-success">
          <th scope="row">Success</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-danger">
          <th scope="row">Danger</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-warning">
          <th scope="row">Warning</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-info">
          <th scope="row">Info</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-light">
          <th scope="row">Light</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr class="table-dark">
          <th scope="row">Dark</th>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
    </tbody>
  </table>
</div>
<div class="bd-example">
  <table class="table table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<div class="bd-example">
  <table class="table table-striped-columns">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<div class="bd-example">
  <table class="table table-dark table-striped">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<div class="bd-example">
  <table class="table table-success table-striped-columns">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<div class="bd-example">
  <table class="table table-hover">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<div class="bd-example">
  <table class="table table-bordered border-primary">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>

  </table>
</div>
<table class="table caption-top">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="table-responsive-md">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
          <th scope="col">Heading</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
          <td>Cell</td>
        </tr>
      </tbody>
    </table>
  </div>
<table>
  <caption>
    This is an example table, and this is its caption to describe the contents.
  </caption>
  <thead>
    <tr>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
      <th>Table heading</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
    <tr>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
      <td>Table cell</td>
    </tr>
  </tbody>
</table>
  ';

  $form['tables'] = [
    '#type' => 'details',
    '#title' => t('Tables'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['tables']['markup'] = [
    '#prefix' => $content_tables,
    // '#attributes' => $attributes,
  ];

  $content_figure = '
   <figure class="figure">
  <img src="/core/profiles/demo_umami/modules/demo_umami_content/default_content/images/vegan-chocolate-nut-brownies.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption">A caption for the above image.</figcaption>
</figure>
<figure class="figure">
  <img src="/core/profiles/demo_umami/modules/demo_umami_content/default_content/images/borscht-with-pork-ribs-umami.jpg" class="figure-img img-fluid rounded" alt="...">
  <figcaption class="figure-caption text-end">A caption for the above image.</figcaption>
</figure>';

  $form['figure'] = [
    '#type' => 'details',
    '#title' => t('Figure'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['figure']['markup'] = [
    '#prefix' => $content_figure,
  ];

  $form['title_forms'] = [
    '#markup' => Markup::create('<h2>Forms</h2>'),
  ];

  $content_forms_bs_legend = '<form>
  <fieldset>
    <legend>Legend</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
      </div>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We\'ll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Example select</label>
      <select class="form-select" id="exampleSelect1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4">Example disabled select</label>
      <select class="form-select" id="exampleDisabledSelect1" disabled="">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
      <select multiple="" class="form-select" id="exampleSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
      <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
    </div>
    <div class="form-group">
      <label for="formFile" class="form-label mt-4">Default file input example</label>
      <input class="form-control" type="file" id="formFile">
    </div>
    <fieldset class="form-group">
      <legend class="mt-4">Radio buttons</legend>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
        <label class="form-check-label" for="optionsRadios1">
          Option one is this and that—be sure to include why it\'s great
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        <label class="form-check-label" for="optionsRadios2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
        <label class="form-check-label" for="optionsRadios3">
          Option three is disabled
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Checkboxes</legend>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Default checkbox
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
        <label class="form-check-label" for="flexCheckChecked">
          Checked checkbox
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Switches</legend>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
      </div>
      <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
      </div>
    </fieldset>
    <fieldset class="form-group">
      <legend class="mt-4">Ranges</legend>
        <label for="customRange1" class="form-label">Example range</label>
        <input type="range" class="form-range" id="customRange1">
        <label for="disabledRange" class="form-label">Disabled range</label>
        <input type="range" class="form-range" id="disabledRange" disabled="">
        <label for="customRange3" class="form-label">Example range</label>
        <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>';

  $form['forms_bs_legend'] = [
    '#type' => 'details',
    '#title' => t('Forms BS legend'),
    '#group' => 'bootstrap',
  ];

  $form['forms_bs_legend']['markup'] = [
    '#markup' => Markup::create($content_forms_bs_legend),
  ];

  $content_forms_bs_legend2 = '<div class="form-group">
  <fieldset disabled="">
    <label class="form-label" for="disabledInput">Disabled input</label>
    <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
  </fieldset>
</div>
<div class="form-group">
  <fieldset>
    <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
    <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
  </fieldset>
</div>
<div class="form-group has-success">
  <label class="form-label mt-4" for="inputValid">Valid input</label>
  <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
  <div class="valid-feedback">Success! You\'ve done it.</div>
</div>
<div class="form-group has-danger">
  <label class="form-label mt-4" for="inputInvalid">Invalid input</label>
  <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
  <div class="invalid-feedback">Sorry, that username\'s taken. Try another?</div>
</div>
<div class="form-group">
  <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Large input</label>
  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
</div>
<div class="form-group">
  <label class="col-form-label mt-4" for="inputDefault">Default input</label>
  <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
</div>
<div class="form-group">
  <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Small input</label>
  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
</div>
<div class="form-group">
  <label class="form-label mt-4">Input addons</label>
  <div class="form-group">
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
      <span class="input-group-text">.00</span>
    </div>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Recipient\'s username" aria-label="Recipient\'s username" aria-describedby="button-addon2">
      <button class="btn btn-primary" type="button" id="button-addon2">Button</button>
    </div>
  </div>
</div>
<div class="form-group">
  <label class="form-label mt-4">Floating labels</label>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">Email address</label>
  </div>
  <div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" autocomplete="off">
    <label for="floatingPassword">Password</label>
  </div>
</div>';

  $form['forms_bs_legend2'] = [
    '#type' => 'details',
    '#title' => t('Forms BS legend2'),
    '#group' => 'bootstrap',
  ];

  $form['forms_bs_legend2']['markup'] = [
    '#markup' => Markup::create($content_forms_bs_legend2),
  ];

  $content_form_fieldset_prefix = '<div class="mb-3">';
  $content_form_fieldset_prefix2 = '<div class="mb-3 form-check">';

  $content_form_fieldset_suffix = '</div>';

  $form['forms'] = [
    '#type' => 'details',
    '#title' => t('Forms'),
    '#group' => 'bootstrap',
  ];
  $form['forms']['fieldset'] = [
    '#type' => 'fieldset',
  ];
  $form['forms']['fieldset']['input'] = [
    '#type' => 'email',
    '#title' => t('Email address'),
    // '#label_attributes' => ['class' => ['btn', 'btn-primary']],
    '#prefix' => $content_form_fieldset_prefix,
    '#suffix' => $content_form_fieldset_suffix,
    '#attributes' => ['class' => ['form-control']],
  ];
  $form['forms']['fieldset']['password'] = [
    '#type' => 'password',
    '#title' => t('Password'),
    '#prefix' => $content_form_fieldset_prefix,
    '#suffix' => $content_form_fieldset_suffix,
    '#attributes' => ['class' => ['form-control']],
  ];
  $form['forms']['fieldset']['checkbox'] = [
    '#type' => 'checkbox',
    '#title' => t('checkbox with label'),
    '#prefix' => $content_form_fieldset_prefix2,
    '#suffix' => $content_form_fieldset_suffix,
    // '#label_attributes' => ['class' => ['btn', 'btn-primary']],
  ];
  $form['forms']['fieldset']['button'] = [
    '#type' => 'submit',
    '#title' => t('Submit'),
    '#value' => t('Submit'),
    '#attributes' => ['class' => ['btn', 'btn-primary']],
  ];

  $form['title_navs'] = [
    '#markup' => Markup::create('<h2>Navs</h2>'),
  ];

  $content_navs_tabs = '<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item" role="presentation">
    <a class="nav-link active" data-bs-toggle="tab" href="#home" aria-selected="true" role="tab">Home</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" data-bs-toggle="tab" href="#profile" aria-selected="false" tabindex="-1" role="tab">Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link disabled" href="#" aria-selected="false" tabindex="-1" role="tab">Disabled</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <h6 class="dropdown-header">Dropdown header</h6>
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="home" role="tabpanel">
    <p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel">
    <p>Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
  </div>
  <div class="tab-pane fade" id="dropdown1">
    <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork.</p>
  </div>
  <div class="tab-pane fade" id="dropdown2">
    <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater.</p>
  </div>
</div>';

  $form['tabs'] = [
    '#type' => 'details',
    '#title' => t('Tabs'),
  ];

  $form['tabs']['markup'] = [
    // '#prefix' => $content_navs_tabs,
    '#markup' => Markup::create($content_navs_tabs),

  ];

  $content_pills = '<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" href="#">Active</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
    <div class="dropdown-menu">
      <h6 class="dropdown-header">Dropdown header</h6>
      <a class="dropdown-item" href="#">Action</a>
      <a class="dropdown-item" href="#">Another action</a>
      <a class="dropdown-item" href="#">Something else here</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#">Separated link</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>';

  $form['pills'] = [
    '#type' => 'details',
    '#title' => t('Pills'),
  ];

  $form['pills']['markup'] = [
    '#markup' => Markup::create($content_pills),
  ];

  $content_breadcrumbs = '<ol class="breadcrumb">
  <li class="breadcrumb-item active">Home</li>
</ol>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item active">Library</li>
</ol>
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol>';

  $form['breadcrumbs'] = [
    '#type' => 'details',
    '#title' => t('Breadcrumbs'),
  ];

  $form['breadcrumbs']['markup'] = [
    '#prefix' => $content_breadcrumbs,
  ];

  $content_pagination = '<div>
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
<div>
  <ul class="pagination pagination-lg">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>
<div>
  <ul class="pagination pagination-sm">
    <li class="page-item disabled">
      <a class="page-link" href="#">&laquo;</a>
    </li>
    <li class="page-item active">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">4</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">5</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">&raquo;</a>
    </li>
  </ul>
</div>';

  $form['pagination'] = [
    '#type' => 'details',
    '#title' => t('Pagination'),
  ];

  $form['pagination']['markup'] = [
    '#prefix' => $content_pagination,
  ];

  $form['title_indicators'] = [
    '#markup' => Markup::create('<h2>Indicators</h2>'),
  ];

  $content_alerts = '<div class="alert alert-primary">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>';

  $form['alerts'] = [
    '#type' => 'details',
    '#title' => t('Alerts'),
    '#group' => 'bootstrap',
  ];

  $form['alerts']['markup'] = [
    '#prefix' => $content_alerts,
    // '#attributes' => $attributes,
  ];

  $content_alerts = '<div class="alert alert-primary">
  A simple primary alert—check it out!
</div>
<div class="alert alert-secondary" role="alert">
  A simple secondary alert—check it out!
</div>
<div class="alert alert-success" role="alert">
  A simple success alert—check it out!
</div>
<div class="alert alert-danger" role="alert">
  A simple danger alert—check it out!
</div>
<div class="alert alert-warning" role="alert">
  A simple warning alert—check it out!
</div>
<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>
<div class="alert alert-light" role="alert">
  A simple light alert—check it out!
</div>
<div class="alert alert-dark" role="alert">
  A simple dark alert—check it out!
</div>
';

  $form['alerts'] = [
    '#type' => 'details',
    '#title' => t('Alerts'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['alerts']['markup'] = [
    '#prefix' => $content_alerts,
    // '#attributes' => $attributes,
  ];

  $content_badge = '<h1>Example heading <span class="badge bg-secondary">New</span></h1>
<h2>Example heading <span class="badge bg-secondary">New</span></h2>
<h3>Example heading <span class="badge bg-secondary">New</span></h3>
<h4>Example heading <span class="badge bg-secondary">New</span></h4>
<h5>Example heading <span class="badge bg-secondary">New</span></h5>
<h6>Example heading <span class="badge bg-secondary">New</span></h6>
<span class="badge text-bg-primary">Primary</span>
<span class="badge text-bg-secondary">Secondary</span>
<span class="badge text-bg-success">Success</span>
<span class="badge text-bg-danger">Danger</span>
<span class="badge text-bg-warning">Warning</span>
<span class="badge text-bg-info">Info</span>
<span class="badge text-bg-light">Light</span>
<span class="badge text-bg-dark">Dark</span>
<span class="badge rounded-pill text-bg-primary">Primary</span>
<span class="badge rounded-pill text-bg-secondary">Secondary</span>
<span class="badge rounded-pill text-bg-success">Success</span>
<span class="badge rounded-pill text-bg-danger">Danger</span>
<span class="badge rounded-pill text-bg-warning">Warning</span>
<span class="badge rounded-pill text-bg-info">Info</span>
<span class="badge rounded-pill text-bg-light">Light</span>
<span class="badge rounded-pill text-bg-dark">Dark</span>

';

  $form['badges'] = [
    '#type' => 'details',
    '#title' => t('Badges'),
    '#group' => 'bootstrap',
    // '#open' => TRUE,
  ];

  $form['badges']['markup'] = [
    '#prefix' => $content_badge,
    // '#attributes' => $attributes,
  ];

  $form['title_progress'] = [
    '#markup' => Markup::create('<h2>Progress</h2>'),
  ];

  $content_progress = '<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>';

  $content_progress_context = '<div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>';

  $content_progress_multiple = '<div class="progress">
  <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>';

  $content_progress_striped = '<div class="progress">
  <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
</div>';

  $content_progress_animated = '<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
</div>';

  $form['progress'] = [
    '#type' => 'details',
    '#title' => t('Progress'),
    '#group' => 'bootstrap',
  ];

  $form['progress']['default'] = [
    '#markup' => Markup::create($content_progress),
  ];

  $form['progress']['context'] = [
    '#markup' => Markup::create($content_progress_context),
  ];

  $form['progress']['multiple'] = [
    '#markup' => Markup::create($content_progress_multiple),
  ];

  $form['progress']['striped'] = [
    '#markup' => Markup::create($content_progress_striped),
  ];

  $form['progress']['animated'] = [
    '#markup' => Markup::create($content_progress_animated),
  ];

  $form['title_containers'] = [
    '#markup' => Markup::create('<h2>Containers</h2>'),
  ];

  $content_list_group = '<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge bg-primary rounded-pill">1</span>
  </li>
</ul>';

  $content_list_group_pills = '<ul class="list-group">
  <li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge bg-primary rounded-pill">14</span>
  </li>
  <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge bg-primary rounded-pill">2</span>
  </li>
  <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge bg-primary rounded-pill">1</span>
  </li><li class="list-group-item list-group-item-info d-flex justify-content-between align-items-center">
    Cras justo odio
    <span class="badge bg-primary rounded-pill">5</span>
  </li>
  <li class="list-group-item list-group-item-warning d-flex justify-content-between align-items-center">
    Dapibus ac facilisis in
    <span class="badge bg-primary rounded-pill">4</span>
  </li>
  <li class="list-group-item list-group-item-danger d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge bg-primary rounded-pill">9</span>
  </li>
  <li class="list-group-item list-group-item-light d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge bg-primary rounded-pill">8</span>
  </li>
  <li class="list-group-item list-group-item-dark d-flex justify-content-between align-items-center">
    Morbi leo risus
    <span class="badge bg-primary rounded-pill">0</span>
  </li>
</ul>';

  $content_list_group_variation = '<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
  <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
  <a href="#" class="list-group-item list-group-item-action disabled">Morbi leo risus</a>
</div>';

  $content_list_group_headings = '<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small>3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small>Donec id elit non mi porta.</small>
  </a>
  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">List group item heading</h5>
      <small class="text-muted">3 days ago</small>
    </div>
    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
    <small class="text-muted">Donec id elit non mi porta.</small>
  </a>
</div>';

  $form['list_groups'] = [
    '#type' => 'details',
    '#title' => t('List Groups'),
    '#group' => 'bootstrap',
  ];

  $form['list_groups']['default'] = [
    '#prefix' => $content_list_group,
  ];

  $form['list_groups']['pills'] = [
    '#prefix' => $content_list_group_pills,
  ];

  $form['list_groups']['variation'] = [
    '#prefix' => $content_list_group_variation,
  ];

  $form['list_groups']['headings'] = [
    '#prefix' => $content_list_group_headings,
  ];

  $content_cards_header = '
  <div class="card" style="width: 18rem;">
  <img src="/core/misc/druplicon.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="/core/misc/druplicon.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card text-bg-dark">
  <img src="/core/misc/druplicon.png" class="card-img" alt="...">
  <div class="card-img-overlay">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small>Last updated 3 mins ago</small></p>
  </div>
</div>

';

  $content_cards = '
<div class="card text-bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-success mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the car\'s content.</p>
  </div>
</div>
<div class="card text-bg-danger mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-warning mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Warning card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card text-bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
';

  $content_cards_body = '<div class="card border-primary mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Primary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-success mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Success card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-danger mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Danger card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-warning mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Warning card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-info mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Info card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-light mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Light card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>
<div class="card border-dark mb-3" style="max-width: 20rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h4 class="card-title">Dark card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
  </div>
</div>';

  $form['cards'] = [
    '#type' => 'details',
    '#title' => t('Cards'),
    '#group' => 'bootstrap',
  ];

  $form['cards']['markup'] = [
    '#markup' => Markup::create($content_cards),
  ];

  $form['cards_body'] = [
    '#type' => 'details',
    '#title' => t('Cards body'),
    '#group' => 'bootstrap',
  ];

  $form['cards_body']['markup'] = [
    '#markup' => Markup::create($content_cards_body),
  ];

  $form['cards_header'] = [
    '#type' => 'details',
    '#title' => t('Cards header'),
    '#group' => 'bootstrap',
  ];

  $form['cards_header']['markup'] = [
    '#markup' => Markup::create($content_cards_header),
  ];

  $content_accordion = '<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item\'s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item\'s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item\'s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It\'s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item\'s accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item\'s accordion body. Let\'s imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item\'s accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>';

  $form['accordion'] = [
    '#type' => 'details',
    '#title' => t('Accordion'),
    '#group' => 'bootstrap',
  ];

  $form['accordion']['markup'] = [
    '#markup' => Markup::create($content_accordion),
    // '#attributes' => $attributes,
  ];

  $content_carousel = '<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
  </div>
</div>';

  $form['carousel'] = [
    '#type' => 'details',
    '#title' => t('carousel'),
    '#group' => 'bootstrap',
  ];

  $form['carousel']['markup'] = [
    '#prefix' => $content_carousel,
  ];

  $form['title_dialogs'] = [
    '#markup' => Markup::create('<h2>Dialogs</h2>'),
  ];

  $content_popups = '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Left</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Top</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Bottom</button>
<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="Popover Title">Right</button>';

  $form['popups'] = [
    '#type' => 'details',
    '#title' => t('Popups'),
    '#group' => 'bootstrap',
  ];

  $form['popups']['default'] = [
    '#markup' => Markup::create($content_popups),
  ];

  $content_tooltips = '<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="Tooltip on left">Left</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Tooltip on top">Top</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-original-title="Tooltip on bottom">Bottom</button>
<button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="Tooltip on right">Right</button>';

  $form['tooltips'] = [
    '#type' => 'details',
    '#title' => t('tooltips'),
    '#group' => 'bootstrap',
  ];

  $form['tooltips']['default'] = [
    '#markup' => Markup::create($content_tooltips),
  ];

  $content_toasts = '<div class="toast show" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close ms-2 mb-1" data-bs-dismiss="toast" aria-label="Close">
      <span aria-hidden="true"></span>
    </button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>';

  $form['toasts'] = [
    '#type' => 'details',
    '#title' => t('toasts'),
    '#group' => 'bootstrap',
  ];

  $form['toast']['default'] = [
    '#markup' => Markup::create($content_toasts),
  ];

  $content_modals = '<div class="modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';

  $form['modals'] = [
    '#type' => 'details',
    '#title' => t('modals'),
    '#group' => 'bootstrap',
  ];

  $form['modals']['default'] = [
    '#markup' => Markup::create($content_modals),
  ];

  $content_offcanvas = '<a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a>
<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  Button with data-bs-target
</button>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
    </div>
    <div class="dropdown mt-3">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
        Dropdown button
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Action</a></li>
        <li><a class="dropdown-item" href="#">Another action</a></li>
        <li><a class="dropdown-item" href="#">Something else here</a></li>
      </ul>
    </div>
  </div>
</div>';

  $form['offcanvas'] = [
    '#type' => 'details',
    '#title' => t('offcanvas'),
    '#group' => 'bootstrap',
  ];

  $form['offcanvas']['default'] = [
    '#markup' => Markup::create($content_offcanvas),
  ];

}
