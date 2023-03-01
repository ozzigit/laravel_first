@extends('layouts.app')
@section('content')
            <style type="text/css">   @import url("css/quiz.css"); </style>
            {{-- <link itemprop="url" href="{{ asset('css/quiz.css') }}" /> --}}
            <section class="createQuiz">
                <div class="container margin d-flex justify-content-center">
                    <button type="button" class="btn btn-success createQuiz">
                        Create quiz
                    </button>
                </div>
            </section>
            <section class="quizContainer">
                <div class="card container quiz" draggable="true">
                    <button type="button" class="btn-close"></button>
                    <div class="card-body">
                        <h3 class="title h3">Enter name of quiz:</h3>
                        <input
                            class="form-control quiz_name"
                            type="text"
                            placeholder="Quiz name"
                        />

                        <div class="card question" draggable="true">
                            <button
                                type="button"
                                class="btn-close"
                                aria-label="Close"
                            ></button>
                            <div class="card-body">
                                <h4 class="title h4">Enter a question:</h4>
                                <input
                                    class="form-control question_name"
                                    type="text"
                                    placeholder="Question"
                                />

                                <div class="answer" draggable="true">
                                    <input
                                        class="form-control answer_text"
                                        type="text"
                                        placeholder="Answer"
                                    />
                                    <input
                                        class="form-check-input"
                                        type="radio"
                                        name="flexRadioDefault"
                                    />
                                    <button
                                        type="button"
                                        class="btn-close static"
                                    ></button>
                                </div>
                                <button
                                    type="button"
                                    class="btn btn-outline-success addAnswer"
                                >
                                    Add answer
                                </button>
                            </div>
                        </div>

                        <button
                            type="button"
                            class="btn btn-outline-success addQuestion"
                        >
                            Add question
                        </button>
                    </div>
                </div>
            </section>
            <section class="sendQuiz">
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-success send">
                        Send quiz
                    </button>
                </div>
            </section>
        </main>
        <script src="js/quiz.js"></script>

@endsection
