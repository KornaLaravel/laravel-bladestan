<x-component :$a :b="$b" c="{{$x}}">{{ $inner }}</x-component>
<x-component :$a :b="$b" c="{{$x}}"/>
-----
<?php

/** @var Illuminate\View\Factory $__env */
/** @var Illuminate\Support\ViewErrorBag $errors */
/** file: foo.blade.php, line: 1 */
function () use ($__env, $a, $b, $x) {
    $a = $a;
    $b = $b;
    $c = '' . e($x) . '';
    $slot = new \Illuminate\View\ComponentSlot();
    $attributes = new \Illuminate\View\ComponentAttributeBag();
    $componentName = '';
    function () use ($__env, $a, $b, $c, $slot, $attributes, $componentName) {
        /** file: components/component.blade.php, line: 1 */
        echo e($a . $b);
        /** file: components/component.blade.php, line: 2 */
        echo e($slot);
        /** file: components/component.blade.php, line: 3 */
        echo e($c);
    };
};
echo e($inner);
/** file: foo.blade.php, line: 2 */
function () use ($__env, $a, $b, $x) {
    $a = $a;
    $b = $b;
    $c = '' . e($x) . '';
    $slot = new \Illuminate\View\ComponentSlot();
    $attributes = new \Illuminate\View\ComponentAttributeBag();
    $componentName = '';
    function () use ($__env, $a, $b, $c, $slot, $attributes, $componentName) {
        /** file: components/component.blade.php, line: 1 */
        echo e($a . $b);
        /** file: components/component.blade.php, line: 2 */
        echo e($slot);
        /** file: components/component.blade.php, line: 3 */
        echo e($c);
    };
};
