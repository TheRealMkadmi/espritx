import Picker from"./picker";class IconPicker extends Picker{constructor(e,t){super(e),this.container.classList.add("ql-icon-picker"),[].forEach.call(this.container.querySelectorAll(".ql-picker-item"),(e=>{e.innerHTML=t[e.getAttribute("data-value")||""]})),this.defaultItem=this.container.querySelector(".ql-selected"),this.selectItem(this.defaultItem)}selectItem(e,t){super.selectItem(e,t),e=e||this.defaultItem,this.label.innerHTML=e.innerHTML}}export default IconPicker;
