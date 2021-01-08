<?php

Route::set('about-us', function() {
  AboutUs::CreateView();
});

Route::set('contact-us', function() {
  echo 'contact-us';
});
