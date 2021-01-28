'use strict';

{
  function setWord() {
    wordTmp = words.splice(Math.floor(Math.random() * words.length), 1)[0];
    word = wordTmp['target'];
    target.textContent = word;
    kana.textContent = wordTmp['kana'];;
    loc = 0;
  }

  let wordTmp;
  let word;
  let loc = 0;
  let startTime;
  let isPlaying = false;
  const target = document.getElementById('target');
  const kana = document.getElementById('kana');
  const music = new Audio('/image/bgm_easy.mp3');

  document.addEventListener('click', () => {
    if (isPlaying === true) {
      return;
    }
    isPlaying = true;
    startTime = Date.now();
    setWord();
    music.play();
    music.loop = true;
  });

  document.addEventListener('keydown', e => {
    if (e.key !== word[loc]) {
      return;
    }

    loc++;

    target.textContent = '_'.repeat(loc) + word.substring(loc);

    if (loc === word.length) {
      if (words.length === 0) {
        music.pause();
        const elapsedTime = ((Date.now() - startTime) / 1000).toFixed(2);
        const result = document.getElementById('result');
        result.textContent = `終了です！あなたの成績は${elapsedTime}秒！`;
        result.classList.add('speech-bubble');
        const button = document.getElementById('button');
        button.innerHTML = `<a href="/result/create?time=${elapsedTime}" class="btn btn-solid-gold">順位は!?</a>`
        return;
      }

      setWord();
    }
  });
}
