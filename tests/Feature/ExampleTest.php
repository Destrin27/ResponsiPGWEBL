<?php

test('application returns successful response', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});
