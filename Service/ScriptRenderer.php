<?php


namespace OxidProfessionalServices\Usercentrics\Service;

interface ScriptRenderer
{
    /**
     * Form output for includes.
     *
     * @param array  $includes String files to include.
     * @param string $widget   Widget name.
     *
     * @return string
     */
    public function formFilesOutput(array $includes, string $widget): string;
}