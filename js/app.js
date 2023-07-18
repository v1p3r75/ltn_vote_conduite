var onglets = document.querySelectorAll('.onglet'); var contenu = document.querySelectorAll('.contenu-form'); var select_div = document.querySelector('.select-niv'); var select_div_2 = document.querySelector('.select-niv-2'); var select_div_listed = document.querySelectorAll('.select-niv-list .under-list li'); var in_pop_up = document.querySelector('#in_pop_up'); var first_sec = document.querySelector('.first_sec'); var close_pop_up = document.querySelector('.close_pop_up'); var snd_close = document.querySelector('.snd_close'); var valide_pop_up = document.querySelector('.valide_pop_up'); var snd = document.querySelector('.second_sec'); var form_for_choosed = document.querySelector('.form_for_choosed'); var choosed = []; var index = 0;
console.clear();

onglets.forEach((item) => {
  item.addEventListener('click',(ev)=>{
    onglets.forEach((it) => {
      it.classList.remove('dopacity')
    });
    item.classList.add('dopacity')
  })
});
function load_ct(where) {
  contenu.forEach((pg) => {
    pg.classList.remove('dblockI')
  });
  contenu[where].classList.add('dblockI')
}
select_div_listed.forEach((li, i) => {
  li.addEventListener('click',(ev)=>{
    if (!ev.target.classList.contains('active') ) {
      ev.target.classList.add('active')
      choosed.push(ev.target);
    }else {
      index = choosed.indexOf(ev.target)
      choosed.splice(index,1)
      ev.target.classList.remove('active')
    }
  },false )
});
var choisi = []
window.addEventListener('click',(ev)=>{
    if (ev.target == select_div) {
      in_pop_up.classList.remove('dnone')
      first_sec.classList.remove('dnone')
    }else if (ev.target == close_pop_up) {
      in_pop_up.classList.add('dnone')
      first_sec.classList.add('dnone')
    }else if (ev.target == valide_pop_up) {
      in_pop_up.classList.add('dnone')
      first_sec.classList.add('dnone')
      if (choosed.length > choisi.length ) {
        for (var i = 0; i < choosed.length; i++) {
          let sp = choosed[i].parentNode.parentNode.innerHTML.slice(0,3)
          inputs = document.createElement('input')
          inputs.type = "number";
          inputs.placeholder = `Entrer la note pour ${choosed[i].innerHTML} de ${sp}`
          inputs.name = `${choosed[i].innerHTML}_${sp}`
          inputs.classList.add('choisi')
          form_for_choosed.appendChild(inputs)
          choisi = document.querySelectorAll('.choisi')
        }
      }
    }else if (ev.target == select_div_2) {
      in_pop_up.classList.remove('dnone')
      snd.classList.remove('dnone')
    }else if (ev.target == snd_close) {
      in_pop_up.classList.add('dnone')
      snd.classList.add('dnone')
    }
})
