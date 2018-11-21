<?php
namespace Interop\Lenient\Annotation;

use ReflectionClass;
use ReflectionMethod;
use ReflectionProperty;

interface AnnotationReader
{
    public function getClassAnnotations(ReflectionClass $ref);
    public function getClassAnnotation(ReflectionClass $class, $annotationName);
    public function getMethodAnnotations(ReflectionMethod $ref);
    public function getMethodAnnotation(ReflectionMethod $method, $annotationName);
    public function getPropertyAnnotations(ReflectionProperty $ref);
    public function getPropertyAnnotation(ReflectionProperty $property, $annotationName);
}
