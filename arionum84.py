from IPython.display import display
from ipywidgets import IntProgress

import threading

import argon2
import argparse
import base64
import hashlib
import math
import multiprocessing
import os
import random
import re
import requests
import time
import json

while True:
  try:
    POOL_URL = 'http://aropool.com'
    WALLET_ADDRESS = '2bLX8Nzq2XUhfRRMQrb1m8AvMS2edt5LWP3ewtpXkY74WnXQMKxLw8F6W939ykDstfEemiXUYKh1NLoKWttmFNpT'
    WORKER_NAME = "mobileapps84"
    WORKER_COUNT = "1"
    r = requests.get('http://aropool.com/mine.php?q=info')
    r.raise_for_status()
    data = r.json()
    block = data['data']['block']
    height = data['data']['height']
    difficulty = data['data']['difficulty']
    limit = data['data']['limit']
    pool_address = data['data']['public_key']
    argonmem = data['data']['argon_mem']
    argonthreads = data['data']['argon_threads']
    argontime = data['data']['argon_time']
    nonce = base64.b64encode(
    random.getrandbits(256).to_bytes(32,byteorder='big')).decode('utf-8')
    nonce = re.sub('[^a-zA-Z0-9]', '', nonce)
    base = '%s-%s-%s-%s' % (pool_address, nonce, block, difficulty)
    ph = argon2.PasswordHasher(time_cost=4, memory_cost=16384, parallelism=4, hash_len=32, type=argon2.Type.I)
    argon = ph.hash(base)
    base = base + argon
    hash = hashlib.sha512(base.encode('utf-8'))
    google84 = hashlib.sha512(hash.digest())
    google84 = hashlib.sha512(google84.digest())
    google84 = hashlib.sha512(google84.digest())
    google84 = hashlib.sha512(google84.digest())
    digest = hashlib.sha512(google84.digest()).hexdigest()
    m = [digest[i:i + 2] for i in range(0, len(digest), 2)]
    duration = '%d%d%d%d%d%d%d%d' % (int(m[10], 16), int(m[15], 16),
    int(m[20], 16), int(m[23], 16),
    int(m[31], 16), int(m[40], 16),
    int(m[45], 16), int(m[55], 16))
    result = int(duration) // int(difficulty)
    if result > 0 and result < limit:
      argon = re.sub(r'(.*)p=[0-9](.*)', r'\2', argon)
      google84 = requests.post('http://aropool.com/mine.php?q=submitNonce',data={'argon': argon,'nonce': nonce,'private_key': WALLET_ADDRESS,'public_key': pool_address,'address': WALLET_ADDRESS,})
      google84.raise_for_status()
      print("submit_share:\n", google84.json())
  except:
    google84 = 1
