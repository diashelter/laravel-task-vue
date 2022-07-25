<?php

test('Must access the page initial', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
