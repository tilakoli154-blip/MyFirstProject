<?php

namespace Tests\Feature;

use Tests\TestCase;

class LabPagesTest extends TestCase
{
    public function test_home_page_is_accessible(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Home Page');
        $response->assertSee('Hello. from Home Page');
    }

    public function test_jobs_page_is_accessible_and_lists_jobs(): void
    {
        $response = $this->get('/jobs');

        $response->assertStatus(200);
        $response->assertSee('Jobs Listing');
        $response->assertSee('Manager');
        $response->assertSee('Engineer');
        $response->assertSee('Assistant');
    }

    public function test_single_job_page_is_accessible(): void
    {
        $response = $this->get('/jobs/1');

        $response->assertStatus(200);
        $response->assertSee('Job');
        $response->assertSee('Manager');
        $response->assertSee('$50,000');
    }

    public function test_contact_page_is_accessible(): void
    {
        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertSee('Contact Page');
        $response->assertSee('Hello from the Contact Page.');
    }
}
