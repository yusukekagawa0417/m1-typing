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
  const mode = location.pathname.slice(-1);;
  const music = mode === "1" ? new Audio('/image/bgm_easy.mp3') : new Audio('/image/bgm_hard.mp3');
  const target = document.getElementById('target');
  const kana = document.getElementById('kana');

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
        button.innerHTML = `<input id="time"
                                   name="time"
                                   value="${elapsedTime}"
                                   type="hidden">
                            <button type="submit" class="btn">順位は!?</button>`
        return;
      }

      setWord();
    }
  });
}
