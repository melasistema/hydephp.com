@props(['embed' => false])
<div class="bg-white dark:bg-slate-700 shadow-md rounded-lg p-6 mb-8">
    <h2 class="text-2xl font-semibold mb-4">Listen to Our AI-Generated Podcast</h2>
    <p class="mb-4">Explore the world of HydePHP in this unique, AI-generated podcast episode. Experience a blend of technology and creativity as we dive deep into the features and benefits of this innovative static site generator, as narrated by a dynamic duo in this podcast generated by <a href="https://notebooklm.google/" class="text-gray-700 dark:text-gray-300 hover:text-indigo-500 dark:hover:text-indigo-400" rel="noopener nofollow">NotebookML</a>, a cutting-edge project by Google.</p>

    <div id="player" class="mb-4">
        <svg class="shk-icons" xmlns="http://www.w3.org/2000/svg">
            <symbol id="shk-icon_play" viewbox="0 0 64 64">
                <path
                        d="M32 0a32 32 0 1 1 0 64 32 32 0 0 1 0-64zm-9 17.8c-1 0-1.7.6-1.7 1.4v25.6c0 .8.8 1.4 1.7 1.4 0 0 25-12 26.2-13.1 1-1 .3-1.9.1-2.1z" />
            </symbol>

            <symbol id="shk-icon_pause" viewbox="0 0 64 64">
                <path fill-rule="nonzero"
                      d="M32 0a32 32 0 1 0 0 64 32 32 0 0 0 0-64zm-4 40a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V24c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16zm16 0a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V24c0-1.1.9-2 2-2h4a2 2 0 0 1 2 2v16z" />
            </symbol>

            <symbol id="shk-icon_download" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3" />
            </symbol>

            <symbol id="shk-icon_forward" viewbox="0 0 128 139">
                <path
                        d="M64 11v14h-.8A50 50 0 1 0 114 75h14a64 64 0 1 1-64-64zm16.9 35c6.6 0 11.8 2.7 15.6 8.3a38 38 0 0 1 5.3 21.4c0 9-1.8 16-5.3 21.3-3.8 5.6-9 8.4-15.6 8.4-6.7 0-12-2.8-15.6-8.4A38 38 0 0 1 60 75.7c0-9 1.8-16.1 5.3-21.4C69 48.7 74.2 46 80.9 46zm-32.5 1v57.1H39V58.3a32.3 32.3 0 0 1-13 7V56a34 34 0 0 0 15.4-9h7zm32.5 7c-4.6 0-7.8 2.4-9.6 7.5-1.3 3.5-2 8.2-2 14.2 0 5.9.7 10.6 2 14.1 1.8 5 5 7.6 9.6 7.6 4.5 0 7.7-2.5 9.6-7.6 1.3-3.5 1.9-8.2 1.9-14.1 0-6-.6-10.7-2-14.2-1.8-5.1-5-7.6-9.5-7.6zM64 0l48 19-48 19V0z" />
            </symbol>

            <symbol id="shk-icon_backward" viewbox="0 0 128 139">
                <path
                        d="M64 0v11A64 64 0 1 1 0 75h14a50 50 0 1 0 50-50v13L16 19 64 0zm17 45.8c6.6 0 11.8 2.7 15.6 8.3a38 38 0 0 1 5.3 21.3c0 9-1.8 16.1-5.3 21.4a18 18 0 0 1-15.6 8.3c-6.7 0-12-2.8-15.6-8.3a38 38 0 0 1-5.3-21.4c0-9 1.8-16 5.3-21.3 3.7-5.6 8.9-8.3 15.6-8.3zm-32.4 1V104h-9.4V58.2a32.3 32.3 0 0 1-13 7v-9.4a34 34 0 0 0 15.4-9h7zm32.4 7c-4.6 0-7.8 2.5-9.6 7.6-1.3 3.4-2 8.1-2 14.1s.7 10.7 2 14.2c1.8 5 5 7.6 9.6 7.6 4.5 0 7.7-2.6 9.6-7.6 1.3-3.5 2-8.2 2-14.2s-.7-10.7-2-14.1c-2-5.1-5.1-7.6-9.6-7.6z" />
            </symbol>

            <symbol id="shk-icon_more" viewbox="0 0 64 64">
                <path
                        d="M8 24a8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8 8 8 0 0 0-8-8zm48 0a8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8 8 8 0 0 0-8-8zm-24 0a8 8 0 0 0-8 8 8 8 0 0 0 8 8 8 8 0 0 0 8-8 8 8 0 0 0-8-8zm0 0" />
            </symbol>

            <symbol id="shk-icon_chapter" viewbox="0 0 64 64">
                <path d="M60.8 55.3H18.1a3.2 3.2 0 1 1 0-6.4h42.8a3.2 3.2 0 0 1 3.1 4.9c-.7 1-1.9 1.6-3.1 1.5zm0-20.2H18.1a3.2 3.2 0 1 1 0-6.4h42.8a3.2 3.2 0 1 1 0 6.4zm0-20H18.1a3.2 3.2 0 1 1 0-6.3h42.8a3.2 3.2 0 0 1 0 6.3zM8.5 12.3a4.2 4.2 0 1 1-8.5 0 4.2 4.2 0 0 1 8.5 0zm0 19.8A4.2 4.2 0 1 1 0 32a4.2 4.2 0 0 1 8.5 0zm0 19.8a4.3 4.3 0 1 1-8.5 0 4.3 4.3 0 0 1 8.5 0zm0 0"/>
            </symbol>

            <symbol id="shk-icon_unmute" viewBox="0 0 64 66">
                <path d="M34.3 0c1.5.1 2.6 1.4 2.9 2.8v60.3c-.3 1.4-1.4 2.7-3 2.8-.7.1-1.6-.1-2.6-.7L13.7 50H4.2a4 4 0 0 1-4.1-4V20.6c0-2.2 1.8-4 4-4.1h9.6c.7-.8 17.2-15.1 17.9-15.8 1-.6 1.9-.8 2.6-.7zm6.4 9.3a2 2 0 0 1 2.4-1.6 25.8 25.8 0 0 1 0 50.5l-.4.1a2 2 0 1 1-.4-4.1 21.7 21.7 0 0 0 0-42.5 2 2 0 0 1-1.6-2.4zm4.7 12.8a12.1 12.1 0 0 1 0 21.8 2 2 0 0 1-2.8-1c-.5-1-.1-2.2 1-2.8a8 8 0 0 0 0-14.4 2 2 0 0 1-1-2.7 2 2 0 0 1 2.8-.9zm0 0"/>
            </symbol>

            <symbol id="shk-icon_mute" viewBox="0 0 64 64">
                <path d="M33.2 0c-.8 0-1.6.1-2.6.7l-17.4 15H4a4 4 0 0 0-4 4v24.1a4 4 0 0 0 4 4h9.2l17.4 14.5c1 .6 1.8.8 2.6.7 1.4-.1 2.5-1.4 2.8-2.6V2.7C35.7 1.4 34.6 0 33.2 0zm23.2 31.5l6.9-6.8c.7-.6 1-1.5.7-2.4-.2-.8-.9-1.5-1.8-1.7-.8-.2-1.8 0-2.4.7L53 28.1 46 21.3c-.6-.6-1.5-1-2.4-.7-.9.2-1.5.9-1.8 1.7-.2.9.1 1.8.8 2.4l6.9 6.8-7 6.8c-.8 1-.8 2.4.2 3.3.9 1 2.4 1 3.3.1l7-6.8 6.8 6.8c1 .9 2.5.8 3.4 0 1-1 1-2.4 0-3.4l-6.8-6.8zm0 0"/>
            </symbol>
        </svg>
        <div class="shk shikwasa js-focus-visible" data-name="shikwasa" data-theme="light" data-fixed-type="auto" data-play="paused" style="--color-primary: #6366f1;">
            <div class="shk-player">
                <div class="shk-bar_wrap">
                    <div class="shk-bar" aria-label="progress bar">
                        <div class="shk-bar_loaded" role="progressbar" aria-label="loaded progress" aria-valuenow="0.09" aria-valuemin="0" aria-valuemax="1" style="width: 8.5106%;"></div>
                        <div class="shk-bar_played" role="progressbar" aria-label="played progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1">
                            <button class="shk-bar-handle" role="slider" aria-label="seek progress" aria-valuenow="0.09" aria-valuemin="0" aria-orientation="horizontal" aria-valuemax="1"></button>
                        </div>
                    </div>
                </div>
                <div class="shk-body">
                    <div class="shk-cover" style="background-image: url('{{ asset('logo.png') }}');">
                        <div class="shk-img"></div>
                    </div>
                    <div class="shk-main">
                        <div class="shk-text">
                            <div class="shk-artist_wrap">
                                <span class="shk-artist">AI-Generated Podcast</span>
                            </div>
                            <div class="shk-title_wrap">
                                <div class="shk-title_inner" data-title="The Deep Dive: HydePHP">
                                    <span class="shk-title">The Deep Dive: HydePHP</span>
                                </div>
                            </div>
                        </div>
                        <div class="shk-controls">
                            <div class="shk-controls_basic">
                                <button class="shk-btn shk-btn_speed" aria-label="toggle playback rate" title="change playback rate" aria-live="polite">1.0x</button>
                                <button class="shk-btn shk-btn_backward" aria-label="rewind 10 seconds" title="rewind 10 seconds">
                                    <svg aria-hidden="true">
                                        <use xlink:href="#shk-icon_backward"></use>
                                    </svg>
                                </button>
                                <button class="shk-btn shk-btn_toggle" aria-label="toggle play and pause">
                                    <svg class="shk-btn_play" aria-hidden="true">
                                        <use xlink:href="#shk-icon_play"></use>
                                    </svg>
                                    <svg class="shk-btn_pause" aria-hidden="true">
                                        <use xlink:href="#shk-icon_pause"></use>
                                    </svg>
                                </button>
                                <button class="shk-btn shk-btn_forward" aria-label="forward 10 seconds" title="forward 10 seconds">
                                    <svg aria-hidden="true">
                                        <use xlink:href="#shk-icon_forward"></use>
                                    </svg>
                                </button>
                                <button class="shk-btn shk-btn_more" aria-label="more controls" title="more controls">
                                    <svg aria-hidden="true">
                                        <use xlink:href="#shk-icon_more"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="shk-controls_extra">
                                <button class="shk-btn shk-btn_volume" aria-label="toggle volume" title="volume">
                                    <svg class="shk-btn_unmute" aria-hidden="true">
                                        <use xlink:href="#shk-icon_unmute"></use>
                                    </svg>
                                    <svg class="shk-btn_mute" aria-hidden="true">
                                        <use xlink:href="#shk-icon_mute"></use>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="shk-display">
                                              <span class="shk-loader" aria-live="polite">
                                                <span class="shk-visuallyhidden" tabindex="-1">loading</span>
                                                <svg aria-hidden="true" aria-label="loading" aria-live="polite" viewBox="0 0 66 66">
                                                  <circle cx="33" cy="33" r="30" fill="transparent" stroke="url(#shk-gradient)" stroke-dasharray="170" stroke-dashoffset="20" stroke-width="6"></circle>
                                                  <linearGradient id="shk-gradient">
                                                    <stop offset="50%" stop-color="currentColor"></stop>
                                                    <stop offset="65%" stop-color="currentColor" stop-opacity=".5"></stop>
                                                    <stop offset="100%" stop-color="currentColor" stop-opacity="0"></stop>
                                                  </linearGradient>
                                                </svg>
                                              </span>
                            <span class="shk-time">
                                                <span class="shk-time_now">00:00</span><span class="shk-time_duration">04:17</span>
                                              </span>
                            <div class="shk-live">live</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="transcript-container" class="mt-4 p-4 bg-gray-50 dark:bg-slate-800 rounded h-[16rem] relative overflow-hidden">
        <h3 class="font-semibold mb-4">Transcript</h3>
        <div id="transcript-wrapper" class="absolute inset-x-4 top-12 bottom-4 overflow-hidden">
            <div id="transcript" class="text-sm absolute w-full transition-transform duration-300 ease-out">
                <div id="transcript-ssr">
                    <?php
                    // Todo: Merge with the js to use this as the initial content

                    $raw = file_get_contents(Hyde::mediaPath('podcast/introduction.srt'));

                    // Split the SRT file into individual blocks based on double newlines
                    $blocks = preg_split('/\n\n|\r\n\r\n/', $raw);

                    $formattedOutput = [];

                    // Loop through each block and extract the spoken text
                    foreach ($blocks as $block) {
                        // Split each block into lines
                        $lines = explode("\n", $block);

                        // Remove the first two lines (index and timestamp) to get just the spoken text
                        $lines = array_slice($lines, 2);

                        // Merge lines of spoken text
                        $text = implode(' ', $lines);

                        // Wrap the spoken text in the specified HTML structure
                        $formattedOutput[] = '<div class="seeker-line py-1 px-2 rounded transition-colors duration-300 text-gray-600 dark:text-gray-400 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600"><span class="text-xs font-mono opacity-75 mr-1">00:00</span> ' . htmlspecialchars($text) . '</div>';
                    }

                    // Join the formatted lines with newlines between each
                    $formattedOutput = implode("\n", $formattedOutput);

                    // Output the formatted HTML
                    echo $formattedOutput;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <p class="text-sm text-gray-600 dark:text-gray-300 italic mt-4"><strong>Note:</strong> This podcast episode is entirely generated by AI, showcasing the potential of artificial intelligence in content creation.</p>
    <p class="text-sm text-gray-600 dark:text-gray-300 italic mt-4"><strong>Human Editor's Note 1:</strong> HydePHP comes preconfigured with everything you need, but it never stands in your way when you need customization or your own logic.</p>
    <p class="text-sm text-gray-600 dark:text-gray-300 italic mt-1"><strong>Human Editor's Note 2:</strong> There's no need to sign on a dotted line, HydePHP is, and will always be, free and open-source software.</p>
</div>

@unless($embed) @push('styles') @endif
    <script src="https://cdn.tailwindcss.com?plugins=typography"></script>
    <script>tailwind.config = { /* tailwind.config.js */
            darkMode: 'class',
            content: ['./_pages/*.blade.php', './resources/views/**/*.blade.php', './vendor/hyde/framework/resources/views/**/*.blade.php',],
            theme: {
                extend: {
                    typography: {
                        DEFAULT: {
                            css: {
                                lineHeight: '1.5em',
                                maxWidth: '96ch',
                                h2: {marginBottom: '0.75em', marginTop: '1.5em',},
                                a: {color: '#5956eb', '&:hover': {color: '#4f46e5',}, textDecoration: 'none'},
                                blockquote: {
                                    backgroundColor: '#80808020',
                                    borderLeftColor: '#d1d5db',
                                    color: 'unset',
                                    fontWeight: 500,
                                    fontStyle: 'unset',
                                    lineHeight: '1.25em',
                                    paddingLeft: '0.75em',
                                    paddingTop: '.25em',
                                    paddingBottom: '.25em',
                                    marginTop: '1em',
                                    marginBottom: '1em',
                                    p: {paddingRight: '.25em', marginTop: '.25em', marginBottom: '.25em',},
                                    'p::before': {content: 'unset',},
                                    'p::after': {content: 'unset',},
                                },
                                code: {
                                    font: 'unset',
                                    backgroundColor: '#80808033',
                                    paddingLeft: '4px',
                                    paddingRight: '4px',
                                    marginLeft: '-2px',
                                    marginRight: '1px',
                                    borderRadius: '4px'
                                },
                                'code::before': {content: 'unset',},
                                'code::after': {content: 'unset',},
                                pre: {code: {fontFamily: "'Fira Code Regular', Consolas, Monospace, 'Courier New'",}}
                            },
                        }, invert: {css: {a: {color: '#818cf8', '&:hover': {color: '#6366f1',},},},},
                    }, colors: {indigo: {500: '#5956eb',}},
                },
            },
            safelist: ['prose', 'dark:prose-invert', 'text-left', 'text-center', 'text-right', 'ml-auto', 'mx-auto', 'mr-auto', 'my-0', 'my-4', 'my-8', 'py-0', 'py-4', 'py-8', 'mx-0', 'mx-4', 'mx-8', 'px-0', 'px-4', 'px-8',],
        }</script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/shikwasa@2.2.0/dist/style.css">

    <style>
        .shk[data-theme=light], .shk {
            --color-primary: #4A5568 !important;;
            --color-theme: #fff;
            --color-secondary: #767676;
            --color-text: #333;
            --color-shadow: #b9b6b680;
            --color-handle-shadow-mobile: #b9b6b6;
        }

        .shk[data-theme=dark], .dark .shk {
            --color-primary: #6366f1 !important;
            --color-theme: #172133;
            --color-secondary: #b9b6b6;
            --color-text: #f8f9fa;
            --color-handle-shadow-mobile: #141414;
            --color-shadow: #14141480;
        }
    </style>
@unless($embed) @endpush @endunless

@unless($embed) @push('scripts') @endunless
    <script src="https://cdn.jsdelivr.net/npm/shikwasa@2.2.0/dist/shikwasa.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let player;
            let manualScrolling = false;
            let scrollTimeout;
            let translateY = 0;

            function initializePlayer() {
                player = new Shikwasa.Player({
                    container: () => document.getElementById('player'),
                    audio: {
                        title: 'The Deep Dive: HydePHP',
                        artist: 'AI-Generated Podcast',
                        cover: '{{ asset('logo.png') }}',
                        src: "https://hydephp.com/media/podcast/introduction.wav",
                    },
                    chapters: [
                        {title: 'Introduction', startTime: 0, endTime: 60},
                        {title: 'Features of HydePHP', startTime: 60, endTime: 180},
                        {title: 'Benefits and Use Cases', startTime: 180, endTime: 300},
                        {title: 'Conclusion', startTime: 300, endTime: 360},
                    ],
                    themeColor: '#6366f1',
                    theme: 'light',
                });
            }

            // Load and display transcript
            fetch("https://hydephp.com/media/podcast/introduction.srt")
                .then(response => response.text())
                .then(srt => {
                    const lines = parseSRT(srt);
                    const transcriptDiv = document.getElementById('transcript');

                    // Remove the SSR content (later we could just use this originally)
                    document.getElementById('transcript-ssr').remove();

                    lines.forEach((line, index) => {
                        const p = document.createElement('p');
                        const timestamp = secondsToTime(line.start);
                        p.innerHTML = `<span class="text-xs font-mono opacity-75 mr-1">${timestamp}</span> ${line.text}`;
                        p.id = `line-${index}`;
                        p.className = 'seeker-line py-1 px-2 rounded transition-colors duration-300 text-gray-600 dark:text-gray-400 cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600';
                        transcriptDiv.appendChild(p);
                    });

                    initializePlayer();

                    player.on('timeupdate', () => {
                        if (!manualScrolling) {
                            const currentTime = player.currentTime;
                            const currentLine = lines.findIndex(line => currentTime >= line.start && currentTime <= line.end);

                            if (currentLine !== -1) {
                                highlightLine(currentLine);
                            }
                        }
                    });

                    player.on('loadedmetadata', () => {
                        document.querySelectorAll('.seeker-line').forEach((p, index) => {
                            const line = lines[index];
                            p.addEventListener('click', () => {
                                player.seek(line.start);
                                player.play();
                            });
                        });
                    });
                });

            // Handle manual scrolling
            const transcriptWrapper = document.getElementById('transcript-wrapper');
            transcriptWrapper.addEventListener('wheel', (event) => {
                manualScrolling = true;

                event.preventDefault();

                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    manualScrolling = false;
                }, 3000); // Delay to prevent immediate re-highlighting

                let currentScrollPosition = translateY;
                let scrollDirection = event.deltaY > 0 ? 'down' : 'up';
                const lineHeight = document.getElementById('line-0').offsetHeight;
                let scrollPosition = scrollDirection === 'down' ? currentScrollPosition + lineHeight : currentScrollPosition - lineHeight;

                // Set the transform offset to the scroll position
                document.getElementById('transcript').style.transform = `translateY(-${scrollPosition}px)`;
                translateY = scrollPosition;
            });

            function parseSRT(srt) {
                const lines = srt.trim().split('\n\n');
                return lines.map(line => {
                    const [id, time, ...text] = line.split('\n');
                    const [start, end] = time.split(' --> ').map(timeToSeconds);
                    return {id, start, end, text: text.join(' ')};
                });
            }

            function timeToSeconds(time) {
                const [hours, minutes, seconds] = time.split(':').map(parseFloat);
                return hours * 3600 + minutes * 60 + seconds;
            }

            function secondsToTime(seconds) {
                const minutes = Math.floor(seconds / 60).toString().padStart(2, '0');
                const remainingSeconds = Math.floor(seconds % 60).toString().padStart(2, '0');
                return `${minutes}:${remainingSeconds}`;
            }

            function highlightLine(lineIndex) {
                const lines = document.querySelectorAll('#transcript p');
                lines.forEach((line, index) => {
                    if (index === lineIndex) {
                        line.classList.add('bg-gray-200', 'dark:bg-gray-600', 'text-gray-900', 'dark:text-white');
                    } else {
                        line.classList.remove('bg-gray-200', 'dark:bg-gray-600', 'text-gray-900', 'dark:text-white');
                    }
                });

                const activeLine = document.getElementById(`line-${lineIndex}`);
                if (activeLine && !manualScrolling) {
                    const lineHeight = activeLine.offsetHeight;
                    const wrapperHeight = transcriptWrapper.offsetHeight;
                    const scrollPosition = activeLine.offsetTop - (wrapperHeight / 2) + (lineHeight / 2);

                    document.getElementById('transcript').style.transform = `translateY(-${scrollPosition}px)`;
                    translateY = scrollPosition;
                }
            }
        });
    </script>
@unless($embed) @endpush @endunless