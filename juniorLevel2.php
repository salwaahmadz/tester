<?php

/**
 * Memisahkan string "nama-job,nama-job" menjadi array.
 * @param string $str
 * @return array
 */
function splitJobCharacters($str)
{
    $result = explode(',', $str);
    echo "[splitJobCharacters] output:\n";
    print_r($result);
    return $result;
}

/**
 * Membalikkan string job (posisi ganjil: 1, 3, 5, ...)
 * @param array $arr
 * @return array
 */
function reverseJobCharacters($arr)
{
    $oddArray = [];
    $evenArray = [];

    foreach ($arr as $index => $r) {
        if ($index % 2 == 1) {
            $oddArray[] = $r;
        } else {
            $evenArray[] = $r;
        }
    }

    echo "[reverseJobCharacters] output odd index array:\n";
    print_r($oddArray);

    $merged = array_merge($evenArray, $oddArray);
    echo "[reverseJobCharacters] merge result:\n";
    print_r($merged);

    return $merged;
}

/**
 * Mendekripsi setiap huruf job ke huruf sebelumnya (a->z, b->a, dst)
 * @param array $arr
 * @return array
 */
function decryptJobCharacters($arr)
{
    // (ex: i -> h, a -> z, d -> c, o -> n, s -> r, t -> s, z -> y)
    // Your code here
}

/**
 * Mengelompokkan data menjadi array 2 dimensi: [[nama, job], ...]
 * @param array $arr
 * @return array
 */
function makingDreamTeam($arr)
{
    // Your code here
}

/**
 * Fungsi utama yang menggabungkan semua proses.
 * @param string $str
 * @return string
 */
function startUpMatchMaking($str)
{
    $splitted = splitJobCharacters($str);
    $reversed = reverseJobCharacters($splitted);
}

// --- CONTOH PEMANGGILAN ---
echo startUpMatchMaking('idaz-sfmutvi,anggara-sfutqji,fika-sfldbi') . "\n";
// Match your Dream Start-Up Team

echo startUpMatchMaking('eko-sfldbi,fajrin-sfmutvi,abdullah-sfutqji,anggara-sfutqji') . "\n";
// Match your Dream Start-Up Team

echo startUpMatchMaking('abdullah-sfldbi,fajrin-sfmutvi,samir-sfldbi,eko-sfmutvi,basil-sfmutvi') . "\n";
// The job composition in the team is not suitable

echo startUpMatchMaking('samir-sfmutvi,basil-sfutqji,eko-sfmutvi') . "\n";
// The job composition in the team is not suitable

echo startUpMatchMaking('samir-sfmutvi,basil-sfutqji') . "\n";
// Minimum 3 members in the team