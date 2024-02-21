<script>
function onInputChange($event) {
    emit('update:modelValue', $event.target.value)
    adjustHeight()
}
function adjustHeight() {
    if (props.autoResize) {
        input.value.style.height = 'auto';
        input.value.style.height = input.value.scrollHeight + 'px';
    }
}
onMounted(() => {
    adjustHeight()
})
</script>
<template>
</template>