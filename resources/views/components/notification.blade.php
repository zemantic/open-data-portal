@props(['type', 'message'])

@php
$success = false;
$error = false;
if ($type == 'success') {
    $success = true;
} elseif ($type == 'error') {
    $error = true;
}
@endphp

<span @class([
    'p-4 block rounded-lg mb-4 font-bold',
    'text-red-700' => $error,
    'bg-red' => $error,
    'bg-green-200' => $success,
    'bg-red-200' => $error,
    'text-green-700' => $success,
])>{{ $message ?? $slot }}</span>
