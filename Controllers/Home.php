<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
     <?= $this->include('layout/header') ?>

        <div class="container text-center mt-5">
            <h1>Hi, I’m Elmer ??</h1>
            <p>A passionate Computer Science graduate building awesome projects.</p>
            <a href="/projects" class="btn btn-primary mt-3">View My Work</a>
        </div>

     <?= $this->include('layout/footer') ?>

    }
}
