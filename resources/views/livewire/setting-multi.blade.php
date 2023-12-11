<div wire:poll.1s.keep-alive>
    <section>
        <div class="timer">
            <span class="timer__part timer__part--minutes">{{gmdate("i:s", $time)}}</span>
            @if ($is_play)
                <button type="button" class="timer__btn timer__btn--control timer__btn--stop" wire:click="pause">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/></svg>
                </button>
            @else
                <button type="button" class="timer__btn timer__btn--control timer__btn--start" wire:click="play">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M8 5v14l11-7z"/></svg>
                </button>
            @endif
            <button type="button" class="timer__btn timer__btn--reset" wire:click="resetTime">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M6 6h12v12H6z"/></svg>
            </button>
            @if ($is_countdown)
                <button type="button" class="timer__btn timer__btn--countdown-true" wire:click="setCountdown">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M13 3c-4.97 0-9 4.03-9 9H1l3.89 3.89.07.14L9 12H6c0-3.87 3.13-7 7-7s7 3.13 7 7-3.13 7-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42C8.27 19.99 10.51 21 13 21c4.97 0 9-4.03 9-9s-4.03-9-9-9zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"/></svg>
                </button>
                @else
                <button type="button" class="timer__btn timer__btn--countdown-false" wire:click="setCountdown">
                    <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24" x="0"/></g><g><g><g><path d="M21,10.12h-6.78l2.74-2.82c-2.73-2.7-7.15-2.8-9.88-0.1c-2.73,2.71-2.73,7.08,0,9.79s7.15,2.71,9.88,0 C18.32,15.65,19,14.08,19,12.1h2c0,1.98-0.88,4.55-2.64,6.29c-3.51,3.48-9.21,3.48-12.72,0c-3.5-3.47-3.53-9.11-0.02-12.58 s9.14-3.47,12.65,0L21,3V10.12z M12.5,8v4.25l3.5,2.08l-0.72,1.21L11,13V8H12.5z"/></g></g></g></svg>
                </button>
            @endif
        </div>
    </section>
    @if ($is_countdown)
        <section class="time-select">
            <div class="timer">
                <button type="button" class="time-select__btn timer__btn--control timer__btn--time-select" wire:click="setDuration(30)">
                    <span class="time-select__span--text">
                        30s
                    </span>
                </button>
                <button type="button" class="time-select__btn timer__btn--control timer__btn--time-select" wire:click="setDuration(45)">
                    <span class="time-select__span--text">
                        45s
                    </span>
                </button>
                <button type="button" class="time-select__btn timer__btn--control timer__btn--time-select" wire:click="setDuration(60)">
                    <span class="time-select__span--text">
                        60s
                    </span>
                </button>
                <button type="button" class="time-select__btn timer__btn--control timer__btn--time-select" wire:click="setDuration(90)">
                    <span class="time-select__span--text">
                        90s
                    </span>
                </button>
                <button type="button" class="time-select__btn timer__btn--control timer__btn--time-select" wire:click="setDuration(120)">
                    <span class="time-select__span--text">
                        120s
                    </span>
                </button>
            </div>
        </section>
    @endif
</div>
