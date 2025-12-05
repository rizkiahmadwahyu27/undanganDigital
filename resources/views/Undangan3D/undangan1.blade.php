<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="w-full h-screen bg-gray-900 text-white">

    {{-- Container Canvas 3D --}}
    <div id="canvas3d" class="w-full h-screen"></div>

    {{-- Overlay Informasi Undangan --}}
    <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center pointer-events-none">
        <h1 class="text-4xl font-bold mb-4 drop-shadow-lg pointer-events-auto">
            {{ $judul ?? 'The Wedding Of' }}
        </h1>
        <h2 class="text-5xl font-semibold text-pink-400 mb-6 pointer-events-auto">
            {{ $mempelai ?? 'Rina & Dimas' }}
        </h2>
        <p class="text-xl pointer-events-auto">
            {{ $tanggal ?? '12 Desember 2025' }}
        </p>
    </div>

</div>

{{-- Import Three.js CDN --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {

    // --- Setup Scene ---
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(
        60,
        window.innerWidth / window.innerHeight,
        0.1,
        1000
    );

    const renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setClearColor(0x0f172a); // warna background
    document.getElementById("canvas3d").appendChild(renderer.domElement);

    // --- Pencahayaan ---
    const light = new THREE.AmbientLight(0xffffff, 1.2);
    scene.add(light);

    const directional = new THREE.DirectionalLight(0xffffff, 1);
    directional.position.set(5, 10, 7);
    scene.add(directional);

    // --- Objek 3D sederhana (Gift Box 3D) ---
    const geometry = new THREE.BoxGeometry(2, 2, 2);
    const material = new THREE.MeshStandardMaterial({
        color: 0xff7ce5,
        roughness: 0.3
    });

    const box = new THREE.Mesh(geometry, material);
    scene.add(box);

    camera.position.z = 5;

    // --- Animasi ---
    function animate() {
        requestAnimationFrame(animate);
        box.rotation.x += 0.005;
        box.rotation.y += 0.01;
        renderer.render(scene, camera);
    }
    animate();

    // --- Responsif ketika layar resize ---
    window.addEventListener("resize", () => {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    });

});
</script>
</body>
</html>