function twoSum(nums: number[], target: number): number[] {
    const numsMap: Record<number, number> = {};
    for (let i = 0; i < nums.length; i++){
        const difference = target - nums[i];
        if(numsMap[difference] !== undefined){
            return [i, numsMap[difference]]
        }
        numsMap[nums[i]] = i;
    }
    return [];
}


