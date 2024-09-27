import random
import string

def generate_random_text_with_numbers(length=100, num_numbers=5):
    """
    Generates random text with a specified number of random 12-digit numbers.

    Args:
        length: The desired length of the text.
        num_numbers: The number of random 12-digit numbers to include.

    Returns:
        A string containing random text with the specified number of random numbers.
    """

    # Generate random text
    random_text = ''.join(random.choice(string.ascii_letters + string.digits) for _ in range(length))

    # Insert random 12-digit numbers
    for _ in range(num_numbers):
        random_number = ''.join(random.choice(string.digits) for _ in range(12))
        random_text = random_text.replace(random.choice(random_text), random_number)

    return random_text

# Example usage:
random_text = generate_random_text_with_numbers()
print(random_text)