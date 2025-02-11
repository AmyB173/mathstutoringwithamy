const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.slide-in');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.01 });

    sections.forEach(section => {
        observer.observe(section);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.slide-in-other');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.05 });

    sections.forEach(section => {
        observer.observe(section);
    });
});





// TESTIMONIALS
const testimonials = [
    {
        title: "Through her teaching methods I was able to achieve an A* and study Maths at University",
        text: "I had Amy as a teacher of A-level Maths. After not having the best background in Maths up until my GCSE results, I chose A level Maths to see how I got on with it and had the plan of dropping it if I found I was struggling. Amy made sure all of her students understood the concepts and if I ever misunderstood a concept, I would never hesitate to ask a question and I would always then understand after her help. Through her teaching methods, I was able to achieve an A* grade and then go on to study a Mathematics degree at University.",
        author: "Ethan, student"
    },
    {
        title: "“I am not sure I would have gone on to do A Level Maths if it wasn’t for her” ",
        text: "Amy taught me Maths and Further Maths GCSE. Thanks to her I secured high grades in both. She is an excellent communicator and made sure the whole class understood what we were learning. She was equally good at coming up with mnemonics and her enthusiasm for the subject was infectious. I am not sure I would have gone on to do A Level Maths if it wasn’t for her giving me such a solid foundation and confidence in the subject",
        author: "Olivia, student"
    },
    {
        title: "He always comes away from the lessons on a high",
        text: "My son has been working with Amy for a few months now,  he was not happy about having a tutor at first, but he now looks forward to his lessons. He always comes away from the lesson on a high. Amy is great at getting my son engaged in the lessons at a level he understands. I 'm really pleased with the progress he is making and more importantly the confidence he now has gained.",
        author: "Emma, parent"
    },
    {
        title: "Amy was often a catalyst for change..",
        text: "Amy was an extremely dedicated and hard working member of the Maths team, always looking for ways to improve her already outstanding classroom practice. As such, she was often a catalyst for change within the department. She has excellent subject knowledge. She developed excellent positive working relationships with pupils, parents and colleagues based on mutual respect and I have no hesitation in recommending her.",
        author: "Pete, Head of Mathematics"
    },
    {
        title: "Students always love having her as a teacher",
        text: "I have worked with Amy in a busy Maths department and she was always very on top of everything and often offering support and inspiration to others. Her lessons are always creative, well considered and enthusiastically delivered. Students always love having her as a teacher, both because of her brilliant teaching methods and supportive, caring nature.",
        author: "Lydiane, colleague"
    },
    {
        title: "A strong track record of excellent results",
        text: "I worked with Amy for several years when she was teaching in school. She is always professional and trustworthy and has a good relationship with her students and their parents. Amy is a popular teacher who always has time for each individual student and tailors her teaching to the student's learning style. She is a proficient teacher at all levels including A level and has many years experience teaching A level in various schools with a strong track record of excellent results. I highly recommend her as a maths tutor.",
        author: "Sarah, colleague"
    }
];

const testimonialsContainer = document.getElementById('testimonials-container');

testimonials.forEach(testimonial => {
    const testimonialElement = document.createElement('div');
    testimonialElement.classList.add('col-md-6', 'col-lg-4', 'mb-4');
    testimonialElement.innerHTML = `
        <div class="testimonial h-100">
            <h5 class="testimonial-title">"${testimonial.title}"</h5>
            <p class="testimonial-text">${testimonial.text}</p>
            <p class="testimonial-author">- ${testimonial.author}</p>
        </div>
    `;
    testimonialsContainer.appendChild(testimonialElement);
});


