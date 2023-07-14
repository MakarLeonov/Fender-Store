<template>
    <div :class="['select-menu', (isActive) ? 'active' : '']" >
        <div class="select-btn" @click="isActive = !isActive">
            <span class="sBtn-text">{{ optionTitle }}</span>
            <i class="bx bx-chevron-down">
                <span class="material-symbols-outlined">keyboard_arrow_down</span>
            </i>
        </div>

        <transition name="slide-fade">
            <ul :class="['options', (isActive) ? 'active' : '']">
                <li :class="['option', (option === optionTitle) ? 'current' : '']"
                    v-for="(option, index) in options" :key="index"
                    @click="isActive = !isActive, optionTitle = option, changeOption(option)">
                    <i class="bx bxl-github" style="color: #171515;"></i>
                    <span class="option-text">{{ option }}</span>
                </li>
            </ul>        
        </transition>

        
    </div>
</template>

<script setup>
import { ref } from 'vue'
const emit = defineEmits(['changeOption'])
const props = defineProps(['options'])

const isActive = ref(false)
const optionTitle = props.options[0]

function changeOption(value) {
    emit('changeOption', value)
}
</script>

<style lang="css" scoped>
.select-menu .select-btn{
    width: 260px;
    display: flex;
    height: 55px;
    background: #fff;
    
    border: 1px solid #5A3015;
    padding: 20px;
    border-radius: 7px;
    align-items: center;
    cursor: pointer;
    justify-content: space-between;
    
    transition: all .2s ease-out;

    color: #5A3015;
    font-size: 24px;
    font-family: Raleway;
}
.select-btn i{
    font-size: 25px;
    transition: 0.3s;
}
.select-menu.active .select-btn i{
    transform: rotate(-180deg);
}
.select-menu .options{
    position: relative;
    position: absolute;
    padding: 10px;
    margin-top: 5px;
    border-radius: 8px;
    background: #fff;
    border: 1px solid #5A3015;
    box-shadow: 0 0 3px rgba(0,0,0,0.1);
    display: none;    
    transition: all .2s ease-out;

}
.select-menu.active .options{
    
    width: 260px;
    display: block;
}

.options .option{
    display: flex;
    height: 55px;
    cursor: pointer;
    /* padding: 0 16px; */
    border-radius: 8px;
    align-items: center;
    background: #fff;
    transition: all .1s ease-out;

    color: #5A3015;
    font-size: 20px;
    font-family: Raleway;
}
.options .option:hover {
    background: #5A3015;
    color: #F2F2F2;
    
    transition: all .2s ease-in;
}

.current {
    background: #5A3015 !important;
    color: #F2F2F2 !important;
}
.option i{
    font-size: 25px;
    margin-right: 12px;
}
.option .option-text{
    font-size: 18px;
    /* color: #333; */
}

.option > .option-text:hover{
    color: #F2F2F2;
    transition: all .2s ease-in;
}

.bx-chevron-down {
    display: flex;
    align-items: center;
    justify-content: center;
    color: #5A3015;

    
}

.bx-chevron-down > span {
        font-size: 30px;
    }

.slide-fade-enter-active {
  transition: all 0.3s ease-out;
}

.slide-fade-leave-active {
  transition: all 0.8s cubic-bezier(1, 0.5, 0.8, 1);
}

.slide-fade-enter-from,
.slide-fade-leave-to {
  transform: translateX(20px);
  opacity: 0;
}

@media (max-width: 730px) {
    .select-menu .select-btn {
        width: 100%;
    }
}

@media (max-width: 525px) {
    .select-menu.active .options {
        width: 75%;
    }
}

@media (max-width: 450px) {
    .select-menu.active .options {
        width: 82%;
    }
}
</style>