<template>
  <div>
      <transition
          appear
          name="fade"
          mode="out-in"
      >
          <div
              v-if="bg"
              class="modal__bg"
          />
      </transition>

      <transition
          appear
          name="slide-top"
          mode="out-in"
      >
          <div
              v-if="box"
              class="modal-window__wrap"
          >
              <div
                  @mousedown.self="$emit('close')"
                  class="modal__container"
              >
                  <div
                      @mousedown.self="$emit('close')"
                      class="modal__content"
                  >
                      <slot/>
                  </div>
              </div>
          </div>
      </transition>
  </div>
</template>

<script>
  export default {
      name: "LayoutModal",
      props: {
          bg: {
              type: Boolean,
              default: false
          },
          box: {
              type: Boolean,
              default: false
          }
      },
      watch: {
          bg (data) {
              if (data) {
                  document.body.style.overflow = 'hidden'
              } else {
                  document.body.style.overflow = ''
              }
          }
      }
  }
</script>

